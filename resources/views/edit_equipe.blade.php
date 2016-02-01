@extends("templates.main_dash")

@section('titulo')
    EJCM - Editar Equipe
@stop

@section('css')
    <link rel = "stylesheet" href = "css/custom/edit_equipe.css"/>
@stop

@section('conteudo')



    <div class="container">

        <div class="col-sm-12">
            <button id="add" class="add-button mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">add</i>
            </button>
        </div>

        <div id="new" class="col-sm-12">
            <div class='demo-card-wide mdl-card mdl-shadow--2dp'>
                <form action='{{route('equipe_adicionar')}}' method="post">
                    {!! csrf_field() !!}

                    <div class='Wcem mdl-card__supporting-text'>
                        <input type='text' class='form-control' name='name' placeholder='Nome do Membro' value='{{ old('name')}}'>
                    </div>
                    <div class="form-group-end proximo">
                        <p>Genero:</p>
                        <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect gender' for='M'>
                            <input type='radio' id='M' class='mdl-radio__button' name='gender' value='M'>
                            <span class='mdl-radio__label'>M</span>
                        </label><label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='F'>
                            <input type='radio' id='F' class='mdl-radio__button' name='gender' value='F'>
                            <span class='mdl-radio__label'>F</span>
                        </label>
                    </div>
                    <div class='Wcem mdl-card__supporting-text'>
                        <input type='text' class='form-control' name='email' placeholder='Email do Membro' value='{{ old('email')}}'>
                    </div>
                    <div class='Wcem mdl-card__supporting-text'>
                        <input type='text' class='form-control' name='photo' placeholder='Link da Foto do Membro' value='{{ old('photo')}}'>
                    </div>
                    <div class='form-group-end'>

                        <p>Diretoria:</p>

                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='gp'>
                            <input type='radio' id='gp' class='mdl-radio__button' name='area-new' value='gp'>
                            <span class='mdl-radio__label'>Gestão de Pessoas</span>
                        </label>
                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='ge'>
                            <input type='radio' id='ge' class='mdl-radio__button' name='area-new' value='ge'>
                            <span class='mdl-radio__label'>Gestão e Estratégia</span>
                        </label>
                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='jufin'>
                            <input type='radio' id='jufin' class='mdl-radio__button' name='area-new' value='jufin'>
                            <span class='mdl-radio__label'>Jurídico e Financeiro</span>
                        </label>
                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='mkt'>
                            <input type='radio' id='mkt' class='mdl-radio__button' name='area-new' value='mkt'>
                            <span class='mdl-radio__label'>Marketing</span>
                        </label>
                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='pres'>
                            <input type='radio' id='pres' class='mdl-radio__button' name='area-new' value='pres'>
                            <span class='mdl-radio__label'>Presidência</span>
                        </label>
                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='proj'>
                            <input type='radio' id='proj' class='mdl-radio__button' name='area-new' value='proj'>
                            <span class='mdl-radio__label'>Projetos</span>
                        </label>
                        <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='conselho'>
                            <input type='radio' id='conselho' class='mdl-radio__button' name='area-new' value='conselho'>
                            <span class='mdl-radio__label'>Conselho Consultivo</span>
                        </label>


                        <p>Cargo:</p>

                        <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='assessor'>
                            <input type='radio' id='assessor' class='mdl-radio__button' name='cargo-new' value='assessor'>
                            <span class='mdl-radio__label'>Assessor</span>
                        </label>
                        <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='diretor'>
                            <input type='radio' id='diretor' class='mdl-radio__button' name='cargo-new' value='diretor'>
                            <span class='mdl-radio__label'>Diretor</span>
                        </label>
                        <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='conselheiro'>
                            <input type='radio' id='conselheiro' class='mdl-radio__button' name='cargo-new' value='conselheiro'>
                            <span class='mdl-radio__label'>Conselheiro</span>
                        </label>
                        <div class='clear'></div>
                        </div>
                        <div class='nice-margin Wce mmdl-card__actions mdl-card--border'>
                            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect save-button" type="submit" value="Adicionar">
                        </div>
                    </form>
                </div>
        </div>


        @foreach($equipe as $membro)
            <div class="col-xs-6 col-sm-4 col-md-3">
                <div  class="demo-card-wide mdl-card mdl-shadow--2dp">
                    <form action="{{route("equipe_alterar")}}" method="post">
                        {!! csrf_field() !!}
                        <div class="img-box">
                            <img src="{{$membro->photo}}" class="avatar">
                        </div>
                        <div class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="name" placeholder="Nome do Membro" value="{{$membro->name}}">
                        </div>

                        <div class="form-group-end proximo">
                            <p>Genero:</p>
                            <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect gender' for='M-{{$membro->id}}'>
                                <input type='radio' id='M-{{$membro->id}}' class='mdl-radio__button' name='gender' value='M'
                                <?php if($membro->gender === 'M') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>M</span>
                            </label>
                            <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='F-{{$membro->id}}'>
                                <input type='radio' id='F-{{$membro->id}}' class='mdl-radio__button' name='gender' value='F'
                                <?php if($membro->gender === 'F') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>F</span>
                            </label>
                        </div>

                        <div class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="email" placeholder="Email do Membro" value="{{$membro->email}}">
                        </div>
                        <div class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="photo" placeholder="Link da Foto do Membro" value="{{$membro->photo}}">
                        </div>
                        <div class="form-group-end">
                            <p>Diretoria:</p>

                            <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='gp-{{$membro->id}}'>
                                <input type='radio' id='gp-{{$membro->id}}' class='mdl-radio__button' name='area' value='gp'
                                <?php if($membro->diretoria === 'gp') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Gestão de Pessoas</span>
                            </label>
                            <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='ge-{{$membro->id}}'>
                                <input type='radio' id='ge-{{$membro->id}}' class='mdl-radio__button' name='area' value='ge'
                                <?php if($membro->diretoria === 'ge') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Gestão e Estratégia</span>
                            </label>
                            <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='jufin-{{$membro->id}}'>
                                <input type='radio' id='jufin-{{$membro->id}}' class='mdl-radio__button' name='area' value='jufin'
                                <?php if($membro->diretoria === 'jufin') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Jurídico e Financeiro</span>
                            </label>
                            <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='mkt-{{$membro->id}}'>
                                <input type='radio' id='mkt-{{$membro->id}}' class='mdl-radio__button' name='area' value='mkt'
                                <?php if($membro->diretoria === 'mkt') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Marketing</span>
                            </label>
                            <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='pres-{{$membro->id}}'>
                                <input type='radio' id='pres-{{$membro->id}}' class='mdl-radio__button' name='area' value='pres'
                                <?php if($membro->diretoria === 'pres') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Presidência</span>
                            </label>
                            <label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='proj-{{$membro->id}}'>
                                <input type='radio' id='proj-{{$membro->id}}' class='mdl-radio__button' name='area' value='proj'
                                <?php if($membro->diretoria === 'proj') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Projetos</span>
                            </label><label class='col-sm-12 mdl-radio mdl-js-radio mdl-js-ripple-effect' for='conselho-{{$membro->id}}'>
                                <input type='radio' id='conselho-{{$membro->id}}' class='mdl-radio__button' name='area' value='conselho'
                                <?php if($membro->diretoria === 'conselho') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Conselho Consultivo</span>
                            </label>


                            <p>Cargo:</p>

                            <label class="Wcem mdl-radio mdl-js-radio mdl-js-ripple-effect" for="assessor-{{$membro->id}}">
                                <input type="radio" id="assessor-{{$membro->id}}" class="mdl-radio__button" name="cargo" value="assessor"
                                <?php if($membro->cargo === 'assessor') echo 'checked="checked"';?>>
                                <span class="mdl-radio__label">Assessor</span>
                            </label>
                            <label class="Wcem mdl-radio mdl-js-radio mdl-js-ripple-effect" for="diretor-{{$membro->id}}">
                                <input type="radio" id="diretor-{{$membro->id}}" class="mdl-radio__button" name="cargo" value="diretor"
                                <?php if($membro->cargo === 'diretor') echo 'checked="checked"';?>>
                                <span class="mdl-radio__label">Diretor</span>
                            </label>
                            <label class='mdl-radio mdl-js-radio mdl-js-ripple-effect' for='conselheiro-{{$membro->id}}'>
                                <input type='radio' id='conselheiro-{{$membro->id}}' class='mdl-radio__button' name='cargo' value='conselheiro'
                                <?php if($membro->cargo === 'conselheiro') echo 'checked="checked"';?>>
                                <span class='mdl-radio__label'>Conselheiro</span>
                            </label>

                            <div class="clear"></div>
                        </div>
                        <div style="display: none" class="Wcem mdl-card__supporting-text">
                            <input type="text" class="form-control" name="id" value="{{$membro->id}}">
                        </div>
                        <div class="Wcem mdl-card__actions mdl-card--border">
                            <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect save-button" type="submit" value="Salvar">
                            <a href="{{url('/deletar_equipe').'/'.$membro->id}}" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect delete-button">Deletar</a>
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
