@extends("templates.main")

@section('titulo')
	EJCM - Home
@stop

@section('css')
	<link rel = "stylesheet" href = "css/custom/home.css"/>
@stop

@section('conteudo')
	<header class="hero-area" id="home">

		<div class="container">

			<div class="col-md-12">

				<div class="navbar navbar-inverse sticky-navigation navbar-fixed-top" role="navigation"
					 data-spy="affix" data-offset-top="200">
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



			<div class="shadow-text contents text-right">
				<h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">"Seus sonhos online"</h1>
				<p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms"></p>
				<a href="{{url('/contato')}}" class="blue-light btn btn-lg btn-primary wow fadeInUp"
				   data-wow-duration="1000ms"
				   data-wow-delay="400ms">Peça um orçamento</a>
				<a href="{{url('/portfolio')}}" class="dark btn btn-lg btn-border wow fadeInUp"
				   data-wow-duration="1000ms"
				   data-wow-delay="500ms">Portfolio</a>
			</div>
		</div>
	</header>

	<section id="about" class="section dark">
		<div class="container">
			<div class="center col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
				<div class="feature-item">
					<p class="mission-text">
						Tem um sonho e gostaria de realizá-lo? Entre em contato conosco e juntos iremos concretizá-lo. Na EJCM você contará com membros capacitados para as suas necessidades.
					</p>
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="section white-blue">
		<div class="container no-padding-xs">
			<div class="center col-sm-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
				<div class="feature-item">
					<h3 class="title-small">
						Depoimentos
					</h3>
				</div>
			</div>
			<div class="col-md-6 depoimento-box wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="col-sm-2">
					<div class="depoimento-img-box margin-auto-xs pulso right">
					</div>
				</div>
				<div class="col-sm-10 left-bigger-xs center-xs">
					<p class="mission-text">
						Pulso Consultoria
					</p>
					<p class="depoimento-text">
						"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias aspernatur, autem culpa doloribus, enim, et laborum magnam mollitia nam nobis odit quasi recusandae repellendus saepe sed velit. Molestias."
					</p>
				</div>
				<div class="clear"></div>
			</div>
			<div class="col-md-6 depoimento-box wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="col-sm-2 hide-bigger-xs">
					<div class="depoimento-img-box bj margin-auto-xs">
					</div>
				</div>
				<div class="col-sm-10">
					<div class="right-bigger-xs center-xs">
						<p class="mission-text">
							Brasil Junior
						</p>
						<p class="depoimento-text">
							"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab ad alias aspernatur, autem culpa doloribus, enim, et laborum magnam mollitia nam nobis odit quasi recusandae repellendus saepe sed velit. Molestias."
						</p>
					</div>
				</div>
				<div class="col-sm-2 hide-xs">
					<div class="depoimento-img-box bj">
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
	</section>

	<section id="cta" class="blue-light-2">
		<div class="container">
			<div class="row text-center">
				<h3 class="wow bounce" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: bounce;">Seja você tambem mais um cliente satisfeito!</h3>
				<a href="{{url('/contato')}}" class="btn btn-lg btn-border-2">Peça um Orçamento</a>
				<a href="javascript:void(0)" class="btn btn-lg btn-border-2">Portfolio</a>
			</div>
		</div>
	</section>

@stop

@section('js')

@stop
