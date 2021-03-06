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

			<div class="diretores row no-padding">
				<div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img id="gp" src="{{asset("img/equipe/suzana.jpg")}}" class="avatar-2 de wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Suzana Maria</h4>
						<h5 class="equipe-diretoria green section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Diretora de Gestão de Pessoas</h5>

						<div class="mdl-tooltip" for="gp">
							Suzaninha
						</div>

						<img id="gp2" src="{{asset("img/equipe/suzana.jpg")}}" class="avatar wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Suzana Maria</h4>
						<h5 class="equipe-diretoria green section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Diretora de Gestão de Pessoas</h5>

						<div class="mdl-tooltip" for="gp2">
							Suzaninha
						</div>

					</div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img src="{{asset("img/equipe/kath.jpg")}}" class="avatar-2 wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Kathleen Santana</h4>
						<h5 class="equipe-diretoria orange section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Diretora de Marketing</h5>

						<img src="{{asset("img/equipe/kath.jpg")}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Kathleen Santana</h4>
						<h5 class="equipe-diretoria orange section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Diretora de Marketing</h5>
					</div>
					<div class="clear-s"></div>
				</div>
				<div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img src="{{asset("img/equipe/brauns.jpg")}}" class="avatar-2 wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretorixa section-title wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Filipe Brauns</h4>
						<h5 class="equipe-diretoria red section-title wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Presidente</h5>

						<img src="{{asset("img/equipe/brauns.jpg")}}" class="avatar wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Filipe Brauns</h4>
						<h5 class="equipe-diretoria red section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Presidente</h5>
					</div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img src="{{asset("img/equipe/gabriele.jpg")}}" class="avatar-2 wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Gabriele Fernanda</h4>
						<h5 class="equipe-diretoria purple section-title wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Vice-Presidente</h5>

						<img src="{{asset("img/equipe/gabriele.jpg")}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Gabriele Fernanda</h4>
						<h5 class="equipe-diretoria purple section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Vice-Presidente</h5>
					</div>
					<div class="clear-s"></div>
				</div>
				<div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img src="{{asset("img/equipe/julia.jpg")}}" class="avatar-2 wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
						<h4 class="equipe-diretoria section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Julia Souza</h4>
						<h5 class="equipe-diretoria blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Diretora Projetos</h5>

						<img src="{{asset("img/equipe/julia.jpg")}}" class="avatar wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Julia Souza</h4>
						<h5 class="equipe-diretoria blue section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Diretora Projetos</h5>
					</div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img src="{{asset("img/equipe/ramalho.jpg")}}" class="avatar-2 wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">
						<h4 class="equipe-diretoria section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Filipe Ramalho</h4>
						<h5 class="equipe-diretoria yellow section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Diretor de Jurídico-Financeiro</h5>

						<img src="{{asset("img/equipe/ramalho.jpg")}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Filipe Ramalho</h4>
						<h5 class="equipe-diretoria yellow section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Diretor de Jurídico-Financeiro</h5>
					</div>
					<div class="clear-s"></div>
				</div>
				<div class="clear"></div>
			</div>

			<div class="diretores row no-padding">
				<div>
					<div class="tablet-padding col-xs-6 col-sm-offset-3 col-sm-2 center">
						<img src="{{asset("img/equipe/afonso.jpg")}}" class="avatar-2 de wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Afonso Carvalho</h4>
						<h5 class="equipe-diretoria section-title wow fadeInLeft small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Conselheiro Consultivo</h5>

						<img src="{{asset("img/equipe/afonso.jpg")}}" class="avatar wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Julia Souza</h4>
						<h5 class="equipe-diretoria section-title wow fadeInLeft colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Conselheiro Consultivo</h5>
					</div>
					<div class="tablet-padding col-xs-6 col-sm-2 center">
						<img src="{{asset("img/equipe/tnik.jpg")}}" class="avatar-2 wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Daniel Lima</h4>
						<h5 class="equipe-diretoria section-title wow fadeInUp small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Conselheiro Consultivo</h5>

						<img src="{{asset("img/equipe/tnik.jpg")}}" class="avatar wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h4 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Daniel Lima</h4>
						<h5 class="equipe-diretoria section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Conselheiro Consultivo</h5>
					</div>
					<div class="clear-s"></div>
				</div>

				<div class="tablet-padding col-xs-offset-3 col-sm-offset-0 col-xs-6 col-sm-2 center">
					<img src="{{asset("img/equipe/victor_fernandes.jpg")}}" class="avatar-2 wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
					<h4 class="equipe-diretoria section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Victor Fernandes</h4>
					<h5 class="equipe-diretoria section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Conselheiro Consultivo</h5>

					<img src="{{asset("img/equipe/victor_fernandes.jpg")}}" class="avatar wow fadeInUp colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h4 class="equipe-diretoria section-title wow fadeInUp colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Victor Fernandes</h4>
					<h5 class="equipe-diretoria section-title wow fadeInUp colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Conselheiro Consultivo</h5>
				</div>
				<div class="clear"></div>
			</div>

			<hr>

			<div class="row no-padding">
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/alexandre.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">Alexandre Pierre</h6>

						<img src="{{asset("img/equipe/alexandre.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Alexandre Pierre</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/amanda.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">Amanda Monteiro</h6>

						<img src="{{asset("img/equipe/amanda.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Amanda Monteiro</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/anna.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Anna Beatriz</h6>

						<img src="{{asset("img/equipe/anna.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Anna Beatriz</h6>
					</div>
				</div>
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/bruno.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="400ms">
						<h6 class="equipe-diretoria-s yellow section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="400ms">Bruno Meurer</h6>

						<img src="{{asset("img/equipe/bruno.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s yellow section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Bruno Meurer</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/daniel.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="500ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="500ms">Daniel Lopes</h6>

						<img src="{{asset("img/equipe/daniel.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Daniel Lopes</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/diego.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Diego Souza</h6>

						<img src="{{asset("img/equipe/diego.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Diego Souza</h6>
					</div>
				</div>
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/domenica.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="700ms">
						<h6 class="equipe-diretoria-s yellow section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="700ms">Domenica Cioci</h6>

						<img src="{{asset("img/equipe/domenica.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s yellow section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Domenica Cioci</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/elmo.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="800ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="800ms">Elmo Sanches</h6>

						<img src="{{asset("img/equipe/elmo.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Elmo Sanches</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/ericson.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Ericson Soares</h6>

						<img src="{{asset("img/equipe/ericson.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Ericson Soares</h6>
					</div>
				</div>
			</div>

			<div class="row no-padding">
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/estevan.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">Estevan Gladstone</h6>

						<img src="{{asset("img/equipe/estevan.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Estevan Gladstone</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/flavio.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">Flavio Ribeiro</h6>

						<img src="{{asset("img/equipe/flavio.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Flavio Ribeiro</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/favoreto.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Guilherme Favoreto</h6>

						<img src="{{asset("img/equipe/favoreto.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Guilherme Favoreto</h6>
					</div>
				</div>
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/gustavo.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="400ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="400ms">Gustavo Dornelas</h6>

						<img src="{{asset("img/equipe/gustavo.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Gustavo Dornelas</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/hugo.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="500ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="500ms">Hugo Rodrigues</h6>

						<img src="{{asset("img/equipe/hugo.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Hugo Rodrigues</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/igor.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Igor Trotte</h6>

						<img src="{{asset("img/equipe/igor.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Igor Trotte</h6>
					</div>
				</div>
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/joao.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="700ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="700ms">João Porto</h6>

						<img src="{{asset("img/equipe/joao.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">João Porto</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/karine.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="800ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="800ms">Karine Cardozo</h6>

						<img src="{{asset("img/equipe/karine.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Karine Cardozo</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/cordeiro.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Lucas Cordeiro</h6>

						<img src="{{asset("img/equipe/cordeiro.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Lucas Cordeiro</h6>
					</div>
				</div>
			</div>

			<div class="row no-padding">
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/lucas.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">Lucas Santos</h6>

						<img src="{{asset("img/equipe/lucas.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Lucas Santos</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/luiz.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">Luiz Fernando</h6>

						<img src="{{asset("img/equipe/luiz.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Luiz Fernando</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/pablo.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="300ms">Pablo da Rocha</h6>

						<img src="{{asset("img/equipe/pablo.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Pablo da Rocha</h6>
					</div>
				</div>
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/pedro.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="400ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="400ms">Pedro Henrique</h6>

						<img src="{{asset("img/equipe/pedro.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s orange section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Pedro Henrique</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/pipe.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="500ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="500ms">Pedro Paulo</h6>

						<img src="{{asset("img/equipe/pipe.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Pedro Paulo</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/correa.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="600ms">Rafael Corrêa</h6>

						<img src="{{asset("img/equipe/correa.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Rafael Corrêa</h6>
					</div>
				</div>
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/almeida.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="700ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="700ms">Raphael Almeida</h6>

						<img src="{{asset("img/equipe/almeida.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s purple section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Raphael Almeida</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/thiago.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="800ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="800ms">Thiago Bergami</h6>

						<img src="{{asset("img/equipe/thiago.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Thiago Bergami</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/victor.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="900ms">Victor Hugo</h6>

						<img src="{{asset("img/equipe/victor.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">
						<h6 class="equipe-diretoria-s blue section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="300ms">Victor Hugo</h6>
					</div>
				</div>
			</div>

			<div class="row no-padding">
				<div class="equipe-s-box equipe-left col-xs-12 col-sm-4 center">
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/vinicius.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="100ms">Vinícius Fernandes</h6>

						<img src="{{asset("img/equipe/vinicius.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">
						<h6 class="equipe-diretoria-s green section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="100ms">Vinícius Fernandes</h6>
					</div>
					<div class="tablet-padding-s equipe-s-box col-xs-4">
						<img src="{{asset("img/equipe/wolf.jpg")}}" class="avatar membro wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s yellow section-title wow fadeInRight small-show medium-show large-show" data-wow-duration="1000ms" data-wow-delay="200ms">Wagner Luiz</h6>

						<img src="{{asset("img/equipe/wolf.jpg")}}" class="avatar membro-2 wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">
						<h6 class="equipe-diretoria-s yellow section-title wow fadeInRight colapsed-show" data-wow-duration="1000ms" data-wow-delay="200ms">Wagner Luiz</h6>
					</div>
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
