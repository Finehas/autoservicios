@extends('layouts.contenido')
@section('titulo','Inicio')
@section('contenido')
	<div class="login-box">
			<img class="avatar" src="img/logo2.jpg">
			<h1>Inicia Sesión</h1>
			<form>
				<label>Nombre del usuario:</label>
				<input type="text" placeholder="Escribe el nombre del usuario">

				<label>Contraseña:</label>
				<input type="password" placeholder="Escribe tu contraseña">

				<a href="{{url('bot')}}"><input type="button" value="Confirmar"></a>

				<a href="">¿Olvidaste tu contraseña?</a>
			</form>
		</div>
@endsection