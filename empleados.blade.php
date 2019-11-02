@extends('layouts.contenido')
@section('titulo','Admin Usuarios')
@section('contenido')
<div id='usuario'>
	<button class="btn btn-success glyphicon glyphicon-user" v-on:click="showModal()">Agregar</button>
	<table class="table table-bordered table-hover table-striped">
		<thead>
			<th>Id</th>
			<th>Usuario</th>
			<th>Contraseña</th>
			<th>Opciones</th>
		</thead>
		<tbody>
			<tr v-for="usuario in usuarios">
				<td>@{{usuario.id}}</td>
				<td>@{{usuario.usuario}}</td>
				<td>@{{usuario.contrasenia}}</td>
				<td>
					<span class="btn btn-primary btn-xs glyphicon glyphicon-pencil" v-on:click='editUsuario(usuario.id)'></span>
					<span class="btn btn-danger btn-xs glyphicon glyphicon-trash" v-on:click="eliminarUsuario(usuario.id,usuario.usuario)"></span>
				</td>
			</tr>
		</tbody>
	</table>
	<div class="modal fade" tabindex="-1" role="dialog" id="add_usuario">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="close"><span aria-hidden="true">x</span></button>
					<h4 class="modal-title" v-if="!editando">Empleado Nuevo</h4>
					<h4 class="modal-title" v-if="editando">Editar Empleado</h4>
				</div>
				<div class="modal-body">
					<input type="text" placeholder="Usuario" class="form-control" v-model="usuario">
					<input type="text" placeholder="Contraseña" class="form-control" v-model="contrasenia">
				</div>
				<div class="modal-footer">
					<h6>Usuario:@{{usuario}}</h6>
					<h6>Contraseña:@{{contrasenia}}</h6>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" v-on:click="agregarUsuario()" v-if="!editando">Guardar</button>
					<button type="submit" class="btn btn-primary" v-on:click="editarUsuario(auxUsuario)" v-if="editando">Editar</button>
				</div>
			</div>
		</div>
	</div>
</div>{{--fin del vue--}}
@endsection
@push('scripts')
<script type="text/javascript" src="js/usuarios.js"></script>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
@endpush