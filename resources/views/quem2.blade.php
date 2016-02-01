@extends("templates.main")

@section('titulo')
    EJCM - Quem Somos
@stop

@section('css')
    <link rel = "stylesheet" href = "{{asset('css/custom/quem.css')}}"/>
@stop

@section('conteudo')
    <header class="hero-area" id="home">

        <div class="container">

            <div class="col-md-12">

                <div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation" data-spy="affix" data-offset-top="200">
                    <div class="container">
                        <div class="navbar-header">
                            <a class="logo-left " href="{{URL::to('/')}}"><img class="header-logo" src = "{{asset('img/ejcms.png')}}" alt = ""/></a>
                        </div>
                        <div class="navbar-right">
                            <ul class="shadow-text top-nav nav navbar-nav main-navigation">
                                <li><a href="{{url('/contato')}}">Contato</a></li>
                                <li class=""><a href="{{url('/ivento')}}">iVento</a></li>
                                <li class=""><a href="{{url('/portfolio')}}">Portfolio</a></li>
                                <li class=""><a href="{{url('/serviços')}}">Serviços</a></li>
                                <li class=""><a href="{{url('/quem-somos')}}">Quem Somos</a></li>
                                <li class=""><a href="{{url('/')}}">Home</a>
                            </ul>
                            <button class="sidebar-menu-button menu-icon"  id="open-button">
                                <i class="mdi-navigation-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>



            <div class="shadow-text contents text-left">
                <h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Quem Somos</h1>
                <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Um pouco da nossa história.
                </p>
            </div>
        </div>
    </header>

    <section id="about" class="section white-blue">
        <div class="container">
            <div class="center col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="feature-item">
                    <p class="mission-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet aperiam at atque, commodi deserunt dolorem dolorum, fugiat illo magni obcaecati odio optio quam sit ut vel. Commodi labore sapiente voluptatem!
                    </p>
                </div>
            </div>
            <div class="col-sm-4">
                <a href = "http://brasiljunior.org.br/" target="_blank"><img class="margin-auto img-responsive wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset("img/quem/bj.png")}}" alt=""></a>
            </div>
            <div class="col-sm-4">
                <a href = "http://riojunior.com.br/" target="_blank"><img class="margin-auto img-responsive wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset("img/quem/rj.png")}}" alt=""></a>
            </div>
            <div class="col-sm-4">
                <a href = "http://www.ufrjunior.ufrj.br/" target="_blank"><img class="margin-auto img-responsive wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" src="{{asset("img/quem/ufrjr.png")}}" alt=""></a>
            </div>
        </div>
    </section>

    <section id="mission" class="section blue-light-2">
        <div class="container">
            <div class="mission-text-box col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <div class="feature-item">
                    <h3 class="title-small">
                        Nossa Missão
                    </h3>
                    <p class="mission-text">
                        Propiciar a descoberta e realização de sonhos através da consultoria e desenvolvimento em TI.
                    </p>
                </div>
            </div>

            <div class="hide-sm col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
                <img src="{{asset("img/quem/rocket.png")}}" class="vision-img img-responsive" alt="">
            </div>
        </div>
    </section>

    <section id="vision" class="section white-blue">
        <div class="container">
            <div class="target-big col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <img src="{{asset("img/quem/target.png")}}" class="img-responsive" alt="">
            </div>

            <div class="col-md-8 col-sm-8 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
                <div class="feature-item">
                    <h3 class="title-small">
                        Nossa Visão
                    </h3>
                    <p class="mission-text">
                        Ser uma EJ de alto impacto através da excelência de projetos e gestão, buscar a satisfação de nossos clientes e ter um ambiente propício ao desenvolvimento de projetos e membros.
                    </p>
                </div>
            </div>

            <div class="hide-sm target-small col-md-4 col-sm-4 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <img src="{{asset("img/quem/target.png")}}" class="img-responsive" alt="">
            </div>
        </div>
    </section>

    <section id="vision" class="section blue-light-2">
        <div class="container">
            <div class="col-md-8 col-sm-8 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <div class="feature-item">
                    <h3 class="title-small valores">
                        Nossos Valores
                    </h3>
                    <p class="oriental">Baseados na cultura oriental dos Samurais</p>
                    <ul class="mission-text list-item">
                        <li><i class="mdi-action-done"></i> Se entregar ao máximo</li>
                        <li><i class="mdi-action-done"></i> Busca pela excelência</li>
                        <li><i class="mdi-action-done"></i> Servir de inspiração</li>
                        <li><i class="mdi-action-done"></i> Força conjunta</li>
                        <li><i class="mdi-action-done"></i> Equilíbrio e resiliência</li>
                        <li><i class="mdi-action-done"></i> Sempre um passo a frente</li>
                        <li><i class="mdi-action-done"></i> Percepção de impacto</li>
                        <li><i class="mdi-action-done"></i> Honrar a EJCM</li>
                    </ul>
                </div>
            </div>

            <div class="hide-sm col-md-4 col-sm-4 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
                <img src="{{asset("img/quem/rocket.png")}}" class="vision-img img-responsive" alt="">
            </div>
        </div>
    </section>

    <section id="clients" class="section white-blue">
        <div class="container">

            <div class="col-xs-12 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInLeft;">
                <div class="feature-item">
                    <h3 class="title-small">
                        Nossa Equipe
                    </h3>
                </div>
            </div>

            <div class="container-fluid">
                <div class="diretores row no-padding">
                    <div>
                        @foreach($pres as $membro)
                                <div class="tablet-padding col-xs-6 col-xs-offset-3 col-sm-2  center">
                                    <img src="{{$membro->photo}}" class="avatar-2 wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Presidente</h5>

                                    <img src="{{$membro->photo}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Presidente</h5>
                                </div>
                        @endforeach

                     </div>
                </div>
            </div>

            <hr>

            <div class="container-fluid">
                <div class="diretores row no-padding">
                    <div>
                        <?php $x = 3 ?>
                        @foreach($ge as $membro)

                            @if($membro->cargo == 'diretor')

                                <div class="tablet-padding col-xs-6 col-xs-offset-3 col-sm-2  center">
                                    <img src="{{$membro->photo}}" class="avatar-2 wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Vice Presidente</h5>

                                    <img src="{{$membro->photo}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Vice Presidente</h5>
                                </div>


                            @else

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Assessor" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Assessora" ?>
                                @endif

                                @if($x%3 == 0)
                                    <div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
                                @endif

                                <div class="tablet-padding-s equipe-s-box col-xs-4">
                                    <img src="{{$membro->photo}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>

                                    <img src="{{$membro->photo}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>
                                </div>

                                @if(($x+1)%3 == 0)
                                    </div>
                                @endif
                                <?php $x = $x+1 ?>

                            @endif
                        @endforeach

                     </div>
                </div>
            </div>

            <hr>

            <div class="container-fluid">
                <div class="diretores row no-padding">
                    <div>
                        <?php $x = 3 ?>
                        @foreach($proj as $membro)

                            @if($membro->cargo == 'diretor')

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Diretor" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Diretora" ?>
                                @endif

                                <div class="tablet-padding col-xs-6 col-xs-offset-3 col-sm-2  center">
                                    <img src="{{$membro->photo}}" class="avatar-2 wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$cargo}} de Projetos</h5>

                                    <img src="{{$membro->photo}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$cargo}} de Projetos</h5>
                                </div>


                            @else

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Assessor" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Assessora" ?>
                                @endif

                                @if($x%3 == 0)
                                    <div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
                                @endif

                                <div class="tablet-padding-s equipe-s-box col-xs-4">
                                    <img src="{{$membro->photo}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>

                                    <img src="{{$membro->photo}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>
                                </div>

                                @if(($x+1)%3 == 0)
                                    </div>
                                @endif
                                <?php $x = $x+1 ?>

                            @endif
                        @endforeach

                     </div>
                </div>
            </div>

            <hr>

            <div class="container-fluid">
                <div class="diretores row no-padding">
                    <div>
                        <?php $x = 3 ?>
                        @foreach($gp as $membro)

                            @if($membro->cargo == 'diretor')

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Diretor" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Diretora" ?>
                                @endif

                                <div class="tablet-padding col-xs-6 col-xs-offset-3 col-sm-2  center">
                                    <img src="{{$membro->photo}}" class="avatar-2 wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$cargo}} de Gestão de Pessoas</h5>

                                    <img src="{{$membro->photo}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$cargo}} de Gestão de Pessoas</h5>
                                </div>


                            @else

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Assessor" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Assessora" ?>
                                @endif

                                @if($x%3 == 0)
                                    <div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
                                @endif

                                <div class="tablet-padding-s equipe-s-box col-xs-4 col-sm-4">
                                    <img src="{{$membro->photo}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>

                                    <img src="{{$membro->photo}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>
                                </div>

                                @if(($x+1)%3 == 0)
                                    </div>
                                @endif
                                <?php $x = $x+1 ?>

                            @endif
                        @endforeach

                     </div>
                </div>
            </div>

            <hr>

            <div class="container-fluid">
                <div class="diretores row no-padding">
                    <div>
                        <?php $x = 3 ?>
                        @foreach($jufin as $membro)

                            @if($membro->cargo == 'diretor')

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Diretor Juridico-Financeiro" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Diretora Juridico-Financeira" ?>
                                @endif

                                <div class="tablet-padding col-xs-6 col-xs-offset-3 col-sm-2  center">
                                    <img src="{{$membro->photo}}" class="avatar-2 wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$cargo}}</h5>

                                    <img src="{{$membro->photo}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$membro->name}}</h4>
                                    <h5 class="equipe-diretoria {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$cargo}}</h5>
                                </div>


                            @else

                                @if($membro->gender == 'M')
                                    <?php $cargo = "Assessor" ?>
                                @elseif($membro->gender == 'F')
                                    <?php $cargo = "Assessora" ?>
                                @endif

                                @if($x%3 == 0)
                                    <div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
                                @endif

                                <div class="tablet-padding-s equipe-s-box col-xs-4">
                                    <img src="{{$membro->photo}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>

                                    <img src="{{$membro->photo}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
                                    <h6 class="equipe-diretoria-s {{$membro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">{{$membro->name}}</h6>
                                </div>

                                @if(($x+1)%3 == 0)
                                    </div>
                                @endif
                                <?php $x = $x+1 ?>

                            @endif
                        @endforeach

                     </div>
                </div>
            </div>

            <hr>
            <div class="container-fluid">
                <div class="diretores row no-padding">
                    <?php $n = 0 ?>
                    @foreach($conselho as $conselheiro)

                        @if($conselheiro->gender == 'M')
                            <?php $cargo = "Conselheiro Consultivo" ?>
                        @elseif($conselheiro->gender == 'F')
                            <?php $cargo = "Conselheira Consultiva" ?>
                        @endif

                        <div class="tablet-padding col-xs-6 @if($n==0) col-sm-offset-2 @endif col-sm-2 center">
                            <img src="{{$conselheiro->photo}}" class="avatar-2 de wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$conselheiro->name}}</h4>
                            <h5 class="equipe-diretoria {{$conselheiro->diretoria}} section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">{{$cargo}}</h5>

                            <img src="{{$conselheiro->photo}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$conselheiro->name}}</h4>
                            <h5 class="equipe-diretoria {{$conselheiro->diretoria}} section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">{{$cargo}}</h5>
                        </div>
                        <?php $n=$n+1 ?>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="clients" class="blue-light-2 section">
        <div class="container">

            <div class="section-header text-center">
                <h1 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Nossos
                    Parceiros</h1>
                <h2 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms"
                    data-wow-delay="600ms"></h2>
            </div>
            <div class="row">
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="client-item-wrapper">
                        <a href = "https://www.ufrj.br/" target="_blank"><img class="parceiros-img" src="img/parceiros/ufrj.png"
                                                                              alt=""></a>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
                    <div class="client-item-wrapper">
                        <a href = "http://www.dcc.ufrj.br/" target="_blank"><img class="parceiros-img" src="img/parceiros/dcc.png"
                                                                                 alt=""></a>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
                    <div class="client-item-wrapper">
                        <a href = "http://portal.nce.ufrj.br/" target="_blank"><img class="parceiros-img" src="img/parceiros/nce
						.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xs-offset-2 col-xs-8 col-sm-offset-0 col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="client-item-wrapper">
                        <a href = "http://www.mobits.com.br/" target="_blank"><img class="parceiros-img" src="img/parceiros/mobits
						.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop

@section('js')
    <script>
        var b = $('.avatar').width();
        $('.avatar').css({'height':b+'px'});

        var b2 = $('.avatar-2').width();
        $('.avatar-2').css({'height':b2+'px'});

        var s = $('.membro').width();
        $('.membro').css({'height':s+'px'});

        var s2 = $('.membro-2').width();
        $('.membro-2').css({'height':s2+'px'});

        $( window ).resize(function() {
            var b = $('.avatar').width();
            $('.avatar').css({'height':b+'px'});

            var b2 = $('.avatar-2').width();
            $('.avatar-2').css({'height':b2+'px'});

            var s = $('.membro').width();
            $('.membro').css({'height':s+'px'});

            var s2 = $('.membro-2').width();
            $('.membro-2').css({'height':s2+'px'});
        });
    </script>

@stop
