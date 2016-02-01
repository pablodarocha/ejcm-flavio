@extends("templates.main_dash")

@section('titulo')
    EJCM - Editar Portfólio
@stop

@section('css')
    <link rel = "stylesheet" href = "css/custom/edit_portfolio.css"/>
@stop

@section('conteudo')

    <div class="container">

        <div class="col-sm-12">
            <button id="add" class="add-button mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">add</i>
            </button>
        </div>

        <div id="new" class="col-sm-12">
            <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                <form action="{{route('portfolio_adicionar')}}" method="post">
                    {!! csrf_field() !!}
                    <div class="Wcem mdl-card__supporting-text">
                        <input type="text" class="form-control" name="name" placeholder="Nome do Projeto" value="">
                    </div>
                    <div class="Wcem mdl-card__supporting-text">
                        <input type="text" class="form-control" name="url" placeholder="Link do Projeto" value="">
                    </div>
                    <div class="Wcem mdl-card__supporting-text">
                        <input type="text" class="form-control" name="photo" placeholder="Link da Foto do Projeto" value="">
                    </div>
                    <div class='nice-margin Wce mmdl-card__actions mdl-card--border'>
                        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect save-button" type="submit" value="Adicionar">
                    </div>
                </form>
            </div>
        </div>


        @foreach($portfolio as $projeto)
            <div class="col-sm-3 col-xs-6">
                <div  class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <form action="{{ action('AdminController@postAlterPortfolio')}}" method="post">
                        {!! csrf_field() !!}
                        <input type="hidden" id="id" name="id" value="{{$projeto->id}}">
                        <img src="{{$projeto->photo}}" class="avatar">
                        <div class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="name" placeholder="Nome do Projeto" value="{{$projeto->name}}">
                        </div>
                        <div class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="url" placeholder="Link do Projeto" value="{{$projeto->url}}">
                        </div>
                        <div class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="photo" placeholder="Link da Foto do Projeto" value="{{$projeto->photo}}">
                        </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect save-button" type="submit" value="Salvar">
                            <a href="{{ action('AdminController@getDeletePortfolio', $projeto->id) }}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect delete-button">Deletar</a>
                        </div>

                    </form>
                </div>
            </div>
        @endforeach
    </div>

@stop

@section('js')
    <script>
        $( "#add" ).click(function() {
            $("#new").css('display','block');
        });
    </script>
@stop
