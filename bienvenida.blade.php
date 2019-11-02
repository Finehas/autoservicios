@extends('layouts.contenido')
@section('titulo','Inicio')
@section('contenido')
<center><img class="img" src="img/logo2.jpg"></center>
		<br>
			<br>
		<h1>Galeria de imagenes</h1>

		<ul class="galeria">
			<li><a href="#img1"><img src="img/1.jpg"></a></li>
			<li><a href="#img2"><img src="img/3.jpg"></a></li>
			<li><a href="#img3"><img src="img/4.jpg"></a></li>
			<li><a href="#img4"><img src="img/6.jpg"></a></li>
			<li><a href="#img5"><img src="img/7.jpg"></a></li>
		</ul>
<br><br>
		<div class="modall" id="img1">
			<h3>Platillo 1</h3>
			<div class="imagen">
				<a href="#img5"><</a>
				<a href=""><img src="img/1.jpg"></a>
				<a href="#img2">></a>
			</div>
			<a href="#" class="cerrar">X</a>
		</div>
		<div class="modall" id="img2">
			<h3>Platillo 2</h3>
			<div class="imagen">
				<a href="#img1"><</a>
				<a href=""><img src="img/3.jpg"></a>
				<a href="#img3">></a>
			</div>
			<a href="#" class="cerrar">X</a>
		</div>
		<div class="modall" id="img3">
			<h3>Platillo 3</h3>
			<div class="imagen">
				<a href="#img2"><</a>
				<a href=""><img src="img/4.jpg"></a>
				<a href="#img4">></a>
			</div>
			<a href="#" class="cerrar">X</a>
		</div>
		<div class="modall" id="img4">
			<h3>Platillo 4</h3>
			<div class="imagen">
				<a href="#img3"><</a>
				<a href=""><img src="img/6.jpg"></a>
				<a href="#img5">></a>
			</div>
			<a href="#" class="cerrar">X</a>
		</div>
		<div class="modall" id="img5">
			<h3>Platillo 5</h3>
			<div class="imagen">
				<a href="#img4"><</a>
				<a href=""><img src="img/7.jpg"></a>
				<a href="#img1">></a>
			</div>
			<a href="#" class="cerrar">X</a>
		</div>
		<div class="te">
		<center><p>Bienvenido al restaurante Co'ox Ja'anal<br>

		¡El mejor sitio para satisfacer tu hambre!</p></center>
		</div>
@endsection
