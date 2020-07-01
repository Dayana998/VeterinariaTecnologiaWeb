<nav class="navbar navbar-light fixed-top navbar-expand-lg shadow" style="background-color: rgba(170, 11, 72, 0.705);">
	<div class="container">
		<a class="navbar-brand" href="{{ route('home') }}"> <img src="/img/logo1.png" height="80px"  alt="logo"> VetSHOP</a>
		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
			<span class="navbar-toggler-icon"></span></button>
		 <div class="collapse navbar-collapse" id="navbarSupportedContent">

			 <ul class="nav nav-pills">
				<li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}"><i class="fas fa-home mr-1"></i>@lang('Home')</a></li>
				<li class="nav-item" ><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}"><i class="fas fa-medkit"></i> @lang('About')</a></li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="far fa-clipboard"></i>Registros</a>
					<div class="dropdown-menu">
					  <a class="dropdown-item  {{ setActive('duenios.*') }}" href="{{ route('duenios.index') }} ">@lang('Dueños')</a>
					  <a class="dropdown-item {{ setActive('animales.*') }}" href="{{ route('animales.index') }} ">@lang('Mascotas')</a>
					
					</div>
				</li>

				<li class="nav-item" ><a class="nav-link {{ setActive('reservas.*') }}" href="{{ route('reservas.index') }}"><i class="far fa-calendar-alt "></i>  @lang('Reservas')</a></li>

				<li class="nav-item" ><a class="nav-link {{ setActive('productos.*') }}" href="{{ route('productos.index') }}">@lang('Productos')</a></li>

				<li class="nav-item" ><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}"><i class="fas fa-phone mr-3"></i>@lang('Contact')</a></li>
				@auth
				<li class="nav-item"><a class="nav-link " href="#" onclick="event.preventDefault();
				document.getElementById('logout-form').submit();" style="font-size:14px"><i class="fas fa-power-off">Cerrar Sesion</i> </a></li>
				@else
				<li class="nav-item"><a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}"><i class="fas fa-users mr-3"></i>@lang('login')</a></li>
				@endauth
			 </ul>
		</div>
	</div>

	</nav>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		 @csrf
		</form>