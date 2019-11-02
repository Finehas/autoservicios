@extends('layouts.contenido')
@section('titulo','Admin Usuarios')
@section('contenido')
<div id='comida'>
	<button class="btn btn-success glyphicon glyphicon-user" v-on:click="showModal()">Agregar</button>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Descripción</th>
			<th>Tipo Comida</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			<tr v-for="comida in comidas">
				<td>@{{comida.id_comida}}</td>
				<td>@{{comida.nombre}}</td>
				<td>@{{comida.descripcion}}</td>
				<td>@{{comida.id_tipocomida}}</td>
				<td>
					<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click='editComida(comida.id_comida)'></span>
					<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarcomida(comida.id_comida,comida.nombre)"></span>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="modal fade" tabindex="-1" role="dialog" id="add_comidas">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
					<h4 class="modal-title" v-if="!editando">Comida Nuevo</h4>
					<h4 class="modal-title" v-if="editando">Editar Comida</h4>
				</div>
				<div class="modal-body">
					<input type="text" placeholder="Nombre" class="form-control" v-model="nombre">
					<input type="text" placeholder="Descripción" class="form-control" v-model="descripcion">
					<select class="form-control" v-model="id_tipocomida">
							<option disabled value="">Elija el Tipo de Comida</option>
							<option v-for="tipo in tipos" v-bind:value="tipo.id_tipocomida">@{{tipo.nombre}}</option>
						</select>
				</div>
				<div class="modal-footer">
					<h6>Nombre:@{{nombre}}</h6>
					<h6>Descripción:@{{descripcion}}</h6>
					<h6>Tipo de Comida:@{{id_tipocomida}}</h6>
					<button type="submit" class="btn btn-primary" v-on:click="agregarComida()" v-if="!editando">Guardar</button>
					<button type="submit" class="btn btn-primary" v-on:click="updateComida(auxComida)" v-if="editando">Editar</button>
				</div>
			</div>
		</div>
	</div>
</div>{{--fin del vue--}}
@endsection
@push('scripts')
<script type="text/javascript" src="js/admincomidas.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
@endpush