<?php

namespace App\Http\Controllers;

use App\Member;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Validator;

class AdminController extends Controller
{

    public function getPortfolio(){

        $portfolio = Project::all()->sortBy("name");

        return view('edit_portfolio')->with('portfolio',$portfolio);
    }

    public function postPortfolio(Request $request){

        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'photo' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('editar_portfolio');
        }else{
            Project::create($request->all());
            return redirect('editar_portfolio');
        }
    }

    public function postAlterPortfolio(Request $request){

        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'photo' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('editar_portfolio');
        }else{

            $id = Input::get('id');
            $projeto = Project::findOrFail($id);
            $projeto->name = Input::get('name');
            $projeto->photo = Input::get('photo');
            $projeto->url = Input::get('url');
            $projeto->save();
            return redirect('editar_portfolio');
        }
    }

    public function getDeletePortfolio($id){

        $projeto = Project::find($id);
        $projeto->delete();

        return redirect('editar_portfolio');
    }

    public function getEquipe(){

        $equipe = Member::all()->sortBy('name');

        return view('edit_equipe')->with('equipe',$equipe);
    }

    public function postEquipe(Request $request){

        $this->validate($request,[
            'name'      => 'required',
            'email'     => 'required',
            'photo'     => 'required',
            'gender'    => 'required',
            'cargo-new' => 'required',
            'area-new'  => 'required'
        ]);

        $membro = new Member();
        $membro->name       = Input::get('name');
        $membro->email      = Input::get('email');
        $membro->photo      = Input::get('photo');
        $membro->gender     = Input::get('gender');
        $membro->cargo      = Input::get('cargo-new');
        $membro->diretoria  = Input::get('area-new');
        $membro->save();

        $equipe = Member::all()->sortBy("name");


        return redirect('/editar_equipe')->with('equipe',$equipe);
    }

    public function postAlterEquipe(Request $request){

        $this->validate($request,[
            'name'      => 'required',
            'email'     => 'required',
            'photo'     => 'required',
            'gender'    => 'required',
            'cargo'     => 'required',
            'area'      => 'required',
            'id'        => 'required'
        ]);

        $id = Input::get('id');

        $membro = Member::findOrFail($id);
        $membro->name       = Input::get('name');
        $membro->email      = Input::get('email');
        $membro->photo      = Input::get('photo');
        $membro->gender     = Input::get('gender');
        $membro->cargo      = Input::get('cargo');
        $membro->diretoria  = Input::get('area');
        $membro->save();

        $equipe = Member::all()->sortBy("name");

        return redirect('/editar_equipe')->with('equipe',$equipe);
    }

    public function getDeleteEquipe($id){

        $membro = Member::findOrFail($id);

        $membro->delete();

        $equipe = Member::all()->sortBy("name");


        return redirect('/editar_equipe')->with('equipe', $equipe);
    }
}
