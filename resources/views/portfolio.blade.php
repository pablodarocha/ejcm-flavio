
@extends("templates.main")
@section('titulo')
    EJCM - Portfólio
@stop
@section('css')
    <link rel = "stylesheet" href = "{{asset('css/custom/portfolio.css')}}"/>
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
                <h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Portfolio</h1>
                <p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Algumas de nossas obras.
                </p>
            </div>
        </div>
    </header>
    <section id="screenshot" class="section main-feature-gray white-blue">
        <div class="container">
            <div class="">
                <div class="section-header">
                    <h1 class="section-title wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms"></h1>
                    <h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms"></h2>
                </div>
            </div>
            <div class="row" style="margin:0; padding:0;">

                @foreach($portfolio as $projeto)
                    <div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">
                        <a @if($projeto->url != null) href = "{{$projeto->url}}" @endif target="_blank">
                            <div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">
                                <figure class="effect-julia">
                                    <img class="port-img" src="{{$projeto->photo}}" alt="">
                                    <figcaption>
                                        <div class="heading">
                                            <h3>{{$projeto->name}}</h3>
                                            <p>
                                            </p>
                                        </div>
                                        @if($projeto->url != null)
                                        <div class="icon">
                                            <i class="mdi-action-open-in-new"></i>
                                        </div>
                                        @endif
                                    </figcaption>
                                </figure>
                            </div>
                        </a>
                    </div>

                @endforeach

                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://www.antharys.com.br/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/antharys.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>Antharys Tecnologia</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://apcbiotecnologia.com.br/home" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/6.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>APC</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://www.digitalfixvideo.com.br/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/digital.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>DigitalFix</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                        {{--<figure class="effect-julia">--}}
                            {{--<img class="port-img" src="{{asset('img/portfolio/5.png')}}" alt="">--}}
                            {{--<figcaption>--}}
                                {{--<div class="heading">--}}
                                    {{--<h3>Empregos Quality</h3>--}}
                                    {{--<p>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                                {{--<div class="icon">--}}
                                {{--</div>--}}
                            {{--</figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://encej.com.br/home" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/4.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>ENCEJ 2015</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://finxi.com.br/gt/public/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/gamer.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>Gamer Trials</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://www.im.ufrj.br/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/2.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>IM - UFRJ</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://www.oceanica.ufrj.br/labsen/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/labsen.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>Labsen</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://www.movercorporativo.com.br/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/1.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>Mover Corporativo</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://quaphilengenharia.com.br/Contato" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/quaphil.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>Quaphil Engenharia</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                        {{--<figure class="effect-julia">--}}
                            {{--<img class="port-img" src="{{asset('img/portfolio/3.png')}}" alt="">--}}
                            {{--<figcaption>--}}
                                {{--<div class="heading">--}}
                                    {{--<h3>Semana Hidros</h3>--}}
                                    {{--<p>--}}
                                    {{--</p>--}}
                                {{--</div>--}}
                                {{--<div class="icon">--}}
                                {{--</div>--}}
                            {{--</figcaption>--}}
                        {{--</figure>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="port-box col-md-3 col-sm-6 col-xs-12" style="margin:0; padding:0;">--}}
                    {{--<a href = "http://semanapulso.ejcm.com.br/" target="_blank">--}}
                        {{--<div class="port-card demo-card-square mdl-card mdl-shadow--2dp portfolio">--}}
                            {{--<figure class="effect-julia">--}}
                                {{--<img class="port-img" src="{{asset('img/portfolio/7.png')}}" alt="">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="heading">--}}
                                        {{--<h3>Semana Pulso</h3>--}}
                                        {{--<p>--}}
                                        {{--</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="icon">--}}
                                        {{--<i class="mdi-action-open-in-new"></i>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                    {{--</a>--}}
                {{--</div>--}}
            </div>
        </div>
    </section>
@stop
@section('js')
    <script>
        var h = $('.port-card').height();
        $('.port-img').css({'height':h+'px'});
        $( window ).resize(function() {
            var h = $('.port-card').height();
            $('.port-img').css({'height':h+'px'});
        });
    </script>
@stop