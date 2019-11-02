@extends('layouts.contenido')
@section('titulo','Tipos')
@section('contenido')
<div id='tipo'>
	<button class="btn btn-success glyphicon glyphicon-user" v-on:click="showModal()">Agregar</button>
	<br><br>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<th>Id</th>
			<th>Tipo</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			<tr v-for="tipo in tipos">
				<td>@{{tipo.id_tipocomida}}</td>
				<td>@{{tipo.nombre}}</td>
				<td>
					<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click="editTipo(tipo.id_tipocomida)"></span>
					<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarTipo(tipo.id_tipocomida,tipo.nombre)"></span>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="modal fade" tabindex="-1" role="dialog" id="add_tipo">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
					<h4 class="modal-title" v-if="!editando">Tipo Nuevo</h4>
					<h4 class="modal-title" v-if="editando">Editar Tipos</h4>
				</div>
				<div class="modal-body">
					<input type="text" placeholder="Nombre" class="form-control" v-model="nombre">
				</div>
				<div class="modal-footer">
					<h6>Nombre:@{{nombre}}</h6>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" v-on:click="agregarTipo()" v-if="!editando">Guardar</button>
					<button type="submit" class="btn btn-primary" v-on:click="agregarTipo(auxTipo)" v-if="editando">Editar</button>
				</div>
			</div>
		</div>
	</div>
</div>{{--fin del vue--}}
@endsection
@push('scripts')
<script type="text/javascript" src="js/tipos.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
@endpush