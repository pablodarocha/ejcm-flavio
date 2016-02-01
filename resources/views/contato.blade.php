@extends("templates.main")

@section('titulo')
	EJCM - Contato
@stop

@section('css')
	<link rel = "stylesheet" href = "{{asset('css/custom/contato.css')}}"/>
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



			<div class="shadow-text contents text-left">
				<h1 class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">Fale Conosco</h1>
				<p class="wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="400ms">Peça um orçamento ou
																							 faça uma pergunta. Nós
																							 entraremos em contato o
																							 mais rápido possível.
				</p>
			</div>
		</div>
	</header>

	<section id="contact" class="white-blue">

		<div class="container">
			<div class="row">
				<div class="col-md-6 wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h2 class="section-title">Informações de Contato</h2>
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="info">
								<div class="icon">
									<i class="mdi-maps-map"></i>
								</div>
								<h4>Endereço</h4>
								<p>Avenida Athos da Silveira Ramos, CCMN, NCE, sala 1030 -
									Ilha do Fundão, Rio de Janeiro - RJ</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<a href="mailto:contato@ejcm.com.br">
								<div class="info">
									<div class="icon">
										<i class="mdi-content-mail"></i>
									</div>
									<h4>Email</h4>
									<p>contato@ejcm.com.br</p>
								</div>
							</a>

						</div>
						<div class="clear"></div>
						<div class="col-md-6 col-sm-6">
							<div class="info">
								<div class="icon">
									<i class="mdi-action-settings-phone"></i>
								</div>
								<h4>Telefone</h4>
								<p>(21) 3938-3336</p>
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<a href="https://www.facebook.com/ejcmconsultoria" target="_blank">
								<div class="info">
									<div class="icon">
										<i class="fa fa-facebook-official"></i>
									</div>
									<h4>Facebook</h4>
									<p>/ejcmconsultoria</p>
								</div>
							</a>
						</div>
					</div>
				</div>

				<ul>
					@foreach($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>

				<div class="col-md-6 wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="300ms">
					<h2 class="section-title">Mensagem</h2>
					<!-- Form -->
					<form action="{{action('SiteController@postContato')}}" method="post" class="contact-form" role="form">
						{!! csrf_field() !!}
						<i class="mdi-action-account-box"></i>
						<input type="text" class="form-control" name="nome" placeholder="Nome" id="nome" value = "{{old("nome")}}">

						<i class="mdi-content-mail"></i>
						<input type="email" class="form-control" name="email" placeholder="Email" id="email" value = "{{old("email")}}">

						<i class="mdi-action-settings-phone"></i>
						<input type="text" class="form-control" name="telefone" placeholder="Telefone" id="telefone" value = "{{old("telefone")}}">

						<i class="mdi-action-bookmark"></i>
						<input type="text" class="form-control" name="assunto" placeholder="Assunto" id="assunto" value = "{{old("assunto")}}">

						<textarea class="text-area form-control" name="mensagem" placeholder="Mensagem" rows="4" id="mensagem" value="{{old("mensagem")}}"></textarea>

						<div class="g-recaptcha" data-sitekey="6LfzjRYTAAAAAFHDChPqxExQ-j11verAaczSLtG5"></div>

						<button type="submit" id="submit" class="blue-light btn btn-lg btn-primary">Enviar
																									Mensagem</button>

						{{--<div id="success" style="color:#3F51B5;">--}}
						{{--</div>--}}
					</form>
				</div>
			</div>
		</div>
	</section>

	<div class="map-area">
		<div id="map" class="map">
			<iframe id="iframe-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3676.51106396213!2d-43.232103!3d-22.857571999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9979380ff2b4a7%3A0xddab88a6112b7578!2sEJCM!5e0!3m2!1spt-BR!2sbr!4v1443199711713" width="100%" height="300" frameborder="0" style="border:0"></iframe>
		</div>
	</div>
@stop

@section('js')

	<script>
		$('body').click(function() {
			var id = event.target.id;
			console.log(id);
			if(id == "map"){
				$( "#iframe-map" ).css( "pointer-events", "auto" );
			}
			else{
				$( "#iframe-map" ).css( "pointer-events", "none" );
			}
		});
	</script>

@stop
