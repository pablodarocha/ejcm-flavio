@extends("templates.main")

@section('titulo')
	EJCM - Ivento
@stop

@section('css')
	<link rel = "stylesheet" href = "{{asset('css/custom/ivento.css')}}"/>
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
								<li class=""><a href="{{url('/ivento')}}">ivento</a></li>
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
				<h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">ivento</h1>
				<p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Nosso prestigiado
																							 gerenciador de eventos.
				</p>
			</div>
		</div>
	</header>


	<section id="why" class="section white-blue-2">
		<div class="container">

			<div class="row">

				<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
					<img class="ivento" src="{{asset('img/ivento/ivento.png')}}" alt="">
				</div>

				<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="pull-left content">
						<h2 class="section-title">ivento</h2>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad aliquam consectetur ea eligendi eos, necessitatibus neque odit omnis placeat porro quod rem reprehenderit repudiandae sunt ullam. Exercitationem illo perferendis porro.
						</p>
						<ul class="list-item">
							<li><i class="mdi-action-done"></i>Inscrição no Evento</li>
							<li><i class="mdi-action-done"></i>Pagamento de Inscrição</li>
							<li><i class="mdi-action-done"></i>Escolha de Quarto no Hotel</li>
							<li><i class="mdi-action-done"></i>Inscrição no Conteúdo</li>
							<li><i class="mdi-action-done"></i>Entrega de Certificado</li>
							<li><i class="mdi-action-done"></i>Analytics</li>
						</ul>
						<a href="{{url('/contato')}}" class="blue-light btn btn-lg btn-primary wow fadeInUp"
						   data-wow-duration="1000ms"
						   data-wow-delay="400ms">Contrate o Ivento</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="about" class="section blue-light-2">
		<div class="container">
			<div class="center col-sm-12 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInRight;">
				<div class="feature-item">
					<h3 class="title-white section-title margin-top-0">
						Conheça o Ivento!
					</h3>
				</div>
				<iframe id="video" class="video-box" width="560" height="315" src="https://www.youtube.com/embed/qRA2aoih-iY" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</section>

	<section id="clients" class="section white-blue">
		<div class="container">

			<div class="section-header text-center">
				<h1 class="section-title wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">Eventos
																										   Que
																										   Utilizaram o
																										   Ivento</h1>
				<h2 class="section-subtitle wow fadeInDown" data-wow-duration="1000ms"
					data-wow-delay="600ms"></h2>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/abcf.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/efej2013.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/efej2014.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/efej2015.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/egej2013.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="700ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/emej2014.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/encej2015.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/enej2014.png" alt="">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/epej2015.png" alt="">
					</div>
				</div>
				<div class="cliente-box col-md-3 col-sm-3 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="900ms">
					<div class="client-item-wrapper">
						<img class="clientes-img" src="img/ivento/jewc2012.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

@stop

@section('js')

	<script>
		var w = $('#video').width();
		var h = $('#video').height();

		if(w < h){
			w *= 0.5625;
			$('#video').css({'height':w+'px'});
		}else{
			h *= 1.777777777777778;
			$('#video').css({'width':h+'px'});
		}

		$( window ).resize(function() {
			var w = $('#video').width();
			var h = $('#video').height();

			if(w < h){
				w *= 0.5625;
				$('#video').css({'height':w+'px'});
			}else{
				h *= 1.777777777777778;
				$('#video').css({'width':h+'px'});
			}
		});
	</script>

@stop
