@extends('layouts.master')
@section('titulo','Comida')
@section('contenido')
<div background="img/cenone.jpg" id="comidas">
	<center><div class="container">
		<ul class="list-image">
		  <li><div class="container_image"><img src="img/KurinOe.jpg" class="image">
		  <div class="imformation_image"><p class="name_image">Empanizado de pescado $55</p><br>
		  	<button class="btn btn-primary btn-sm" v-on:click="sumar1()">+</button> <label class="canti">Cantidad:@{{cantidad1}}</label> <button class="btn btn-danger btn-sm" v-on:click="restar1()">-</button><br>
		  	<a href="#" class="view_moreinfo" v-on:click="detalles1()">ver mas informacion</a>
		  </div></li>
		  <li><div class="container_image">
		  	<img src="img/pato.jpg" class="image">
		  <div class="imformation_image"><p class="name_image">Lomo a la parrilla $65</p><br>
		  	<button class="btn btn-primary btn-sm" v-on:click="sumar2()">+</button> <label class="canti">Cantidad:@{{cantidad2}}</label> <button class="btn btn-danger btn-sm" v-on:click="restar2()">-</button><br>
		  	<a href="#" class="view_moreinfo" v-on:click="detalles2">ver mas informacion</a>
		  </div></li>
		  <li><div class="container_image">
		  	<img src="img/plato.jpg" class="image">
		  <div class="imformation_image"><p class="name_image">Filete asado $60</p><br>
		  	<button class="btn btn-primary btn-sm" v-on:click="sumar3()">+</button> <label class="canti">Cantidad:@{{cantidad3}}</label> <button class="btn btn-danger btn-sm" v-on:click="restar3()">-</button><br>
		  	<a href="#" class="view_moreinfo" v-on:click="detalles3">ver mas informacion</a>
		  </div></li>
		  <li><div class="container_image">
		  	<img src="img/mon.jpg" class="image">
		  <div class="imformation_image"><p class="name_image">Empenizado relleno de crema $70</p><br>
		  	<button class="btn btn-primary btn-sm" v-on:click="sumar4()">+</button> <label class="canti">Cantidad:@{{cantidad4}}</label> <button class="btn btn-danger btn-sm" v-on:click="restar4()">-</button><br>
		  	<a href="#" class="view_moreinfo" v-on:click="detalles4">ver mas informacion</a>
		  </div></li>
		  <li><div class="container_image">
		  	<img src="img/2.jpg" class="image">
		  <div class="imformation_image"><p class="name_image">Tortitas con papa $60</p><br>
		  	<button class="btn btn-primary btn-sm" v-on:click="sumar5()">+</button> <label class="canti">Cantidad:@{{cantidad5}}</label> <button class="btn btn-danger btn-sm" v-on:click="restar5()">-</button><br>
		  	<a href="#" class="view_moreinfo" v-on:click="detalles5">ver mas informacion</a>
		  </div></li>
		  <li><div class="container_image">
		  	<img src="img/h2.jpg" class="image">
		  <div class="imformation_image"><p class="name_image">Camarones rellenos de queso $100</p><br>
		  	<button class="btn btn-primary btn-sm" v-on:click="sumar6()">+</button> <label class="canti">Cantidad:@{{cantidad6}}</label> <button class="btn btn-danger btn-sm" v-on:click="restar6()">-</button><br>
		  	<a href="#" class="view_moreinfo" v-on:click="detalles6">ver mas informacion</a>
		  </div></li>
		</ul>
	<center></div>
@endsection
@push('scripts')
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script src="js/comidas.js"></script>
@endpush
