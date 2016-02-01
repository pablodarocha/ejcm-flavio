<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Hash;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */

    public function postContato(Request $request)
    {
        if(isset($_POST['g-recaptcha-response']) && ($_POST['g-recaptcha-response']))
        {
            $secret = "6LfzjRYTAAAAAHJwpwEAz7X43UL6EA-dUE4KiHeU";
            $captcha = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip");
            $arr = json_decode($rsp, TRUE);
            $this->validate($request, [
                'nome' => 'required',
                'email' => 'required|email',
                'telefone' => 'required',
                'assunto' => 'required',
                'mensagem' => 'required',
            ]);
            if ($arr['success']){
                Mail::send('emails.contato', [
                    'nome' => $request->nome,
                    'email' => $request->email,
                    'telefone' => $request->telefone,
                    'assunto' => $request->assunto,
                    'mensagem' => $request->mensagem
                ], function ($message) {
                    $message->to(env('CONTACT_FORM_TO'))
                        ->subject('Contato do Site');
                });
                return back()->with(['message' => 'Sua mensagem foi enviada com sucesso']);
            }
            else{
                return back()->withErrors(['recaptcha' => 'Erro no recaptcha'])->withInput();
            }
        }
        else{
            return back()->withErrors(['recaptcha' => 'O recaptcha deve ser preenchido'])->withInput();
        }
    }

    public function getContato()
    {
        return view('contato');
    }


    public function postCadastrar(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::where('username', Input::get('username'))->first();

        if(empty($user)){
            $user = new User();
            $user->username = Input::get('username');
            $user->password = bcrypt(Input::get('password'));
            $user->save();

            return redirect('login')->with('cadastroSucesso', 'Dados Cadastrados com sucesso, faça login para continuar')
                ->withInput($request->except('password'));

        }
        else{
            return redirect('/cadastro')->with('status', 'Usuario já cadastrado')
                ->withInput($request->except('password'));
        }
    }


    public function getQuemSomos(){

        $diretoria = DB::table('members')->where('cargo', 'diretor')->get();


        return view('quem')->with('diretoria', $diretoria);

    }

    public function getQuemSomos1(){

        $diretoria  = DB::table('members')->where('cargo', 'diretor')->get();
        $conselho   = DB::table('members')->where('cargo', 'conselheiro')->get();
        $membros    = DB::table('members')->where('cargo', 'assessor')->orderBy("name")->get();


        return view('quem1')->with(['diretoria' => $diretoria, 'conselho' => $conselho, 'membros' => $membros]);

    }

    public function getQuemSomos2(){

        $gp         = DB::table('members')->where('diretoria', 'gp')->where('cargo', 'diretor')->get();
        $ge         = DB::table('members')->where('diretoria', 'ge')->where('cargo', 'diretor')->get();
        $proj       = DB::table('members')->where('diretoria', 'proj')->where('cargo', 'diretor')->get();
        $jufin      = DB::table('members')->where('diretoria', 'jufin')->where('cargo', 'diretor')->get();
        $pres       = DB::table('members')->where('diretoria', 'pres')->where('cargo', 'diretor')->get();
        $mkt        = DB::table('members')->where('diretoria', 'mkt')->where('cargo', 'diretor')->get();
        $conselho   = DB::table('members')->where('cargo', 'conselheiro')->get();


        $gp     = array_collapse([$gp, DB::table('members')->where('diretoria', 'gp')->where('cargo', 'assessor')->get()]);
        $ge     = array_collapse([$ge, DB::table('members')->where('diretoria', 'ge')->where('cargo', 'assessor')->get()]);
        $proj   = array_collapse([$proj, DB::table('members')->where('diretoria', 'proj')->where('cargo', 'assessor')->get()]);
        $jufin  = array_collapse([$jufin, DB::table('members')->where('diretoria', 'jufin')->where('cargo', 'assessor')->get()]);
        $mkt    = array_collapse([$mkt, DB::table('members')->where('diretoria', 'mkt')->where('cargo', 'assessor')->get()]);


        return view('quem2')->with([
            'gp'        => $gp,
            'ge'        => $ge,
            'proj'      => $proj,
            'jufin'     => $jufin,
            'pres'      => $pres,
            'mkt'       => $mkt,
            'conselho'  => $conselho,
        ]);

    }

    public function getPortfolio(){

        $portfolio = DB::table('projects')->get();

        return view('portfolio')->with('portfolio', $portfolio);

}

}