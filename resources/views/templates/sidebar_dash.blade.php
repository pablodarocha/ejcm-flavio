<div class="navbar navbar-invers menu-wrap">
	<div class="navbar-header text-center">
		<a class="navbar-brand logo-right" href="javascript:void(0)">
			<img class="header-logo" src = "{{asset('img/logo_ejcm.svg')}}" alt = ""/>
		</a>
	</div>
	<ul class="nav navbar-nav main-navigation">
		<li class=""><a href="{{url('/editar_equipe')}}">Editar Equipe</a></li>
		<li class=""><a href="{{url('/editar_portfolio')}}">Editar Portfólio</a></li>
		<li class="">
			<a href="{{action('Auth\AuthController@getLogout')}}">
				Log Out <i class="log-out-i mdi-action-exit-to-app"></i>
			</a>
		</li>
	</ul>
	<button class="close-button" id="close-button">Close Menu</button>
</div>