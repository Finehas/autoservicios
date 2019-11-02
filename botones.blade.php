<!DOCTYPE html>
<html>
<head>
@extends('layouts.contenido')
@section('titulo','Admin Usuarios')
@section('contenido')
@endsection
<link rel="stylesheet" type="text/css" href="css/botones.css">
</head>
<body>
<center><header>
	<a href="{{url('admin')}}"><div class="contenedor" id="uno">
	<img src="img/post.png" class="icon">
	<p class="texto">Usuarios</p>
	</div></a>

	<a href="{{url('adcomi')}}"><div class="contenedor" id="dos">
		<img class="icon" src="img/comi.png">
		<p class="texto">Comidas</p>
	</div></a>

	<a href="{{url('tipos')}}"><div class="contenedor" id="tres">
		<img class="icon" src="img/bebi3.png">
		<p class="texto">Tipos de comida</p>
	</div></a>
</header></center>	

</body>
</html>
