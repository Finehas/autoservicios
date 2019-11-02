<!DOCTYPE html>
<html>
<head>
	<title>@yield('titulo')</title>
	<meta name="token" id="token" value="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet"  href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/contenido.css">
	<script type="text/javascript" src="js/vue.js"></script>
		<script src="js/vue.js"></script>
	<script type="text/javascript" src="js/vue-resource.js"></script>
</head>
<body class="body">
		<div class="container">
			<header>
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a href="{{url('bienvenida')}}" class="navbar-brand ptm"><img class="logo" src="img/logo2.jpg"></a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-1">
							<ul class="nav navbar-nav ">
								<li><a href="{{url('comida')}}">Comida</a></li>
								<li><a href="{{url('bebidas')}}">Bebidas</a></li>
								<li><a href="{{url('postre')}}">Postre</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a class="ini" href="{{url('login')}}">Iniciar sesión</a></li>
							</ul>
						</div>
					</div>
				</nav>
			</header>
		</div>
		<br>	<br>	<br>	<br>	<br>	<br>	<br>
@if(request()->is('bot') || request()->is('adcomi') || request()->is('admin'))
<div class="container">
			<header>
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a href="{{url('bienvenida')}}" class="navbar-brand ptm"><img class="logo" src="img/logo2.jpg"></a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-1">
							<ul class="nav navbar-nav ttee ">
								<li class="ttee"><a href="#">Panel Administrativo</a></li>
							</ul>
							</div>
					</div>
				</nav>
			</header>
		</div>
		@endif
		@if(request()->is('tipos'))
<div class="container">
			<br>
			<header>
				<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
					<div class="container-fluid">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse">
								<span class="sr-only"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>

							<a href="{{url('bienvenida')}}" class="navbar-brand ptm"><img class="logo" src="img/logo2.jpg"></a>
						</div>
						<div class="collapse navbar-collapse" id="navbar-1">
							<ul class="nav navbar-nav ttee ">
								<li class="ttee">Panel Administrativo</li>
							</ul>
							</div>
					</div>
				</nav>
			</header>
		</div>
		@endif
		@yield('contenido')
		@stack('scripts')
		<footer class="text text-center pie"><b>Página web Épsilon<br>
			Terminos y Condiciones<br>
		</b></footer>
	</body>
</html>