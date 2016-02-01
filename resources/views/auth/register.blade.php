@extends("templates.login")

@section('titulo')
    EJCM - Login
@stop

@section('css')
    <link rel = "stylesheet" href = "css/custom/login.css"/>
@stop

@section('conteudo')


    <section id="about" class="section">
        <div class="container">
            <div class="col-sm-offset-4 col-sm-4">
                <div class="center wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
                    <a href="{{url('/')}}"><img class="img-logo" src="{{asset("img/ejcm.png")}}" alt=""></a>
                </div>

                <form action="{{action('SiteController@postCadastrar')}}" method = "post">
                    {!! csrf_field() !!}

                    <i class="mdi-action-https"></i>
                    <input type="text" class="form-control" name="username" placeholder="Nome de Usuario">

                    <i class="mdi-action-https"></i>
                    <input type="password" class="form-control" name="password" placeholder="Senha">

                    <i class="mdi-action-https"></i>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Senha">

                    <button type="submit" id="submit" class="submit-button col-sm-12 btn btn-lg btn-primary">Enviar</button>
                </form>

            </div>

        </div>
    </section>

@stop

@section('js')

@stop