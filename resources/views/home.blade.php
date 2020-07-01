@extends('layout')
@section('title', 'Home')
@section('content')
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
	  <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
	  <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
	  <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="img/carrusel1.png" width="100%"  alt="carrusel 1">
	  </div>
	  <div class="carousel-item">
		<img src="img/carrusel2.png" width="100%" alt="carrusel 2">
	  </div>
	  <div class="carousel-item">
		<img src="img/carrusel5.png" width="100%" alt="carrusel 3">
	  </div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>

 <h6 id="h6">Veterinaria VetShop</h6>
<hr>

 <section id="portfolio">
	<div class="container-fluid">
		<div class="content-center">
			<h2>Tratalos como quieres que te traten<b> ellos tambien sienten.</b></h2>
			<p>Estamos comprometidos con el <b>bienestar</b> de tu mascota, es por eso que esta veterinaria cuenta con los productos y servicios de la mas alta calidad para que tu mascota se sienta como en su casa. Aqui se les <b>conciente</b> de una manera amigable tratando simempre de hacerlos sentir la alegria de visitar una veterinaria.</p>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="portfolio-container">
					<div class="portfolio-details">
						<a href="#">
							<h2>Un Maullido Es Un Masaje Al Corazón.</h2>
						</a>
					</div>
					<img src="/img/kitten.jpg" class="img-fluid" alt="Portfolio 01">
				</div>
			</div>
			<div class="col-md-6">
				<div class="portfolio-container">
					<div class="portfolio-details">
						<a href="#">
							<h2>El Perro Es Parte Del Hombre</h2>
						</a>
					</div>
					<img src="/img/dog1.jpg" class="img-fluid" alt="Portfolio 02">
				</div>
			</div>
			<div class="col-md-6">
				<div class="portfolio-container">
					<div class="portfolio-details">
						<a href="#">
							<h2>En Inglés, Perro Es Dios Escrito Al Revés</h2>
						</a>
					</div>
					<img src="/img/pug.jpg" class="img-fluid" alt="Portfolio 03">
				</div>
			</div>
			<div class="col-md-6">
				<div class="portfolio-container">
					<div class="portfolio-details">
						<a href="#">
							<h2>No Hay Gatos Corrientes.</h2>
						</a>
					</div>
					<img src="/img/cat.jpg" class="img-fluid" alt="Portfolio 04">
				</div>
			</div>
		</div>
		<div class="text-center mt-4">
			<p class="">Estamos Listos Para Atender A Tu Mascota</p>
			<a href="#" class="text-dark"><b>Solo Avisanos.</b></a>
		</div>
	</div>
</section>

 <div id="container-card" style=" background-color: linear-gradient(180deg, #f8003eb4, #5a002d);">
<div class="row" >
  <div class="card shadow" style="width: 18rem; margin-left:16%;">
	<img src="img/doctores.jpg" class="card-img-top" alt="Servicios">
	<div class="card-body">
	  <h5 class="card-title">Servicios</h5>
	  <hr>
	  <p class="card-text">-Vacunas <br> -Desparacitacion <br> -Esterilizacion <br> -Peluqueria</p>
	  <hr>
	  <a class="btn btn-primary" href="{{ route('about') }}" class="card-link">Ver mas</a>
	</div>
  </div>
  <div class="card shadow" style="width: 18rem; margin-left:15px;">
	<img src="img/doctor.jpg" class="card-img-top" alt="Medicos">
	<div class="card-body">
	  <h5 class="card-title">Medicos</h5>
	  <hr>
	  <p class="card-text">nuestra veterinaria cuenta con los mejores medicos especialistas para todos nuestros servicos ofrecidos.</p>
	  <hr>
	  <a class="btn btn-primary" href="{{ route('about') }}" class="card-link">Ver mas</a>
	</div>
  </div>
  <div class="card shadow" style="width: 18rem; margin-left:15px">
	<img src="img/carru1.png" class="card-img-top" alt="Productos">
	<div class="card-body">
	  <h5 class="card-title">Productos</h5>
	  <hr>
	  <p class="card-text">-Accesorios <br> -Ropa <br> -Juguetes <br> -Comida</p>
	  <hr>
	  <a class="btn btn-primary" href="{{ route('about') }}" class="card-link">Ver mas</a>
	</div>
  </div>
</div>
</div>
{{--  
	<h1 class="display-4 text-primary">Servicios</h1>
	<p class="lead text-secondary">La veterinaria cuenta con una variedad de servicios a la disposicion de los dueños y las necesidades de las mascotas.</p>
	<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
	<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('duenios.create') }}">Portafolio</a>
</div>
<div class="col-12 col-lg-6" >
	<img class="img-fluid mb-4" src="/img/home.svg" alt="Desarrollo Web">
</div>
</div>--}}

@endsection