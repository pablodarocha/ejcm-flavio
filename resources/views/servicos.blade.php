@extends("templates.main")

@section('titulo')
	EJCM - Serviços
@stop

@section('css')
	<link rel = "stylesheet" href = "{{asset('css/custom/servicos.css')}}"/>
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
				<h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Desenvolvimento Web</h1>
				<p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">O que nós fazemos</p>
			</div>
		</div>
	</header>

	<section id="features" class="section blue-light-2">
		<div class="container">
			<div class="section-header">
				<h1 class="section-title wow fadeInRight" data-wow-duration="1000ms"
					data-wow-delay="100ms"></h1>
				<h2 class="section-subtitle wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms"></h2>
			</div>
			<div class="row">

				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="features">
						<div class="icon">
							<i class="fa fa-users"></i>
						</div>
						<div class="features-text">
							<h4>Consultoria em TI</h4>
							<p>
								Precisa de ajuda para organizar suas ideias?
								Quer mostrar o que você faz de melhor?
								Temos uma equipe pronta para te ajudar a alcançar seu objetivo.
							</p>
						</div>
					</div>
				</div>


				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
					<div class="features">
						<div class="icon">
							<i class="mdi-hardware-phonelink"></i>
						</div>
						<div class="features-text">
							<h4>Sites</h4>
							<p>
								Quer divulgar sua empresa ou sua ideia? Atrair mais clientes? Divulgar seu portfólio? Nós podemos desenvolver o seu projeto junto com você e colocar seu sonho online.
							</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="550ms">
					<div class="features">
						<div class="icon">
							<i class="mdi-action-settings"></i>
						</div>
						<div class="features-text">
							<h4>Sistemas Web</h4>
							<p>
								Gerenciamento de estoque? De clientes? Seus projetos? Seu evento? Sua equipe? Para automatizar seus processos e alavancar o seu negócio. Fazemos isso todos os dias.
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section id="clients" class="section white-blue">
		<div class="container">

			<div class="section-header text-center">
				<h1 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Nossos Clientes</h1>
				<h2 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms"
					data-wow-delay="600ms"></h2>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.abcfarm.org.br/" target="_blank"><img class="parceiros-img" src="img/clients/abcf.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.antharys.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/antharys.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://brasiljunior.org.br/" target="_blank"><img class="parceiros-img" src="img/clients/bj.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.apcbiotecnologia.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/apc.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.digitalfixvideo.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/digital.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.empregosquality.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/empregos.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.fejemg.org.br/site/" target="_blank"><img class="parceiros-img" src="img/clients/fejemg.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box ol-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://fejers.org.br/" target="_blank"><img class="parceiros-img" src="img/clients/fejers.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cliente-box ol-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.fejesp.org.br/" target="_blank"><img class="parceiros-img" src="img/clients/fejesp.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://finxi.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/finxi.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.hidrosconsultoria.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/hidros.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.im.ufrj.br/" target="_blank"><img class="parceiros-img" src="img/clients/im.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.federacaojuniores.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/juniores.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.oceanica.ufrj.br/labsen/" target="_blank"><img class="parceiros-img" src="img/clients/labsen.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.movercorporativo.com.br" target="_blank"><img class="parceiros-img" src="img/clients/mover.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://portal.nce.ufrj.br/" target="_blank"><img class="parceiros-img" src="img/clients/nce.png" alt=""></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://www.pulsoconsultoria.com.br/breve/" target="_blank"><img class="parceiros-img" src="img/clients/pulso.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://quaphilengenharia.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/quaphil.png" alt=""></a>
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<a href="http://riojunior.com.br/" target="_blank"><img class="parceiros-img" src="img/clients/rj.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</section>
@stop

@section('js')

@stop
