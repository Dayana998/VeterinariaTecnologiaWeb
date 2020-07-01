<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
	<link rel="stylesheet" href="/css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<script src="{{ mix('js/app.js') }}" defer ></script>

</head>
<body>
	<div id="app" class="d-flex flex-column h-screen  ">
		<header>
			@include('partials.nav')
		</header>
		<main class="py-4">
			@yield('content')
		</main>
		@include('partials.footer')

	</div>
</body>
</html>