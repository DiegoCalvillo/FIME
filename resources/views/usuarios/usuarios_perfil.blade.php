@extends('layouts.principal')
<?php $message=Session::get('message') ?>
	
	@if($message == 'save')
		<div class="alert alert-success" role="alert">
        Foto de Perfil cambiada exitosamente <a href="/usuarios/{{ $users->id }}" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

@section('content_usuarios_perfil')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/usuarios/cambiar_foto" enctype="multipart/form-data">
	{!! Form::hidden('id', $users->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{ $users->name }}</h1>
			</div>
		</div>
		@include('alerts.request')
		<div class="row">
			<div class="col-lg-6">
				<img width="70%" src="{!! asset($users->ruta_foto) !!}" sizes="64x64">
				<br>
				@if(Auth::User()->puesto_id == 2)
				<a class="btn btn-success glyphicon glyphicon-pencil" href="{{ route('usuarios/edit', ['id' => $users->id] )}}" style="align-self: center;"> Editar</a>
				@endif
				@if(Auth::User()->id == $users->id)
				<div class="form-group">
					<label>Cambiar foto de Perfil</label>
					<input type="file" class="form-control" name="file" id="file">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Cambiar</button>
				</div>
				@endif
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Información del Usuario
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover">
							<tbody>
								<tr>
									<th>ID asignado por el sistema</th>
									<td>{{ $users->id }}</td>
								</tr>
								<tr>
									<th>Usuario</th>
									<td>{{ $users->username }}</td>
								</tr>
								<tr>
									<th>Num. de Empleado</th>
									<td>{{ $users->matricula }}</td>
								</tr>
								<tr>
									<th>Rol del Usuario</th>
									<td>{{ $users->puesto->nombre_puesto }}</td>
								</tr>
								<tr>
									<th>Estatus del Usuario</th>
									<td>{{ $users->estatus->nombre_estatus }}</td>
								</tr>
								@if(Auth::User()->puesto_id == 2)
								<tr>
									<th>Fecha de Creación</th>
									<td>{{ $created_at->toFormattedDateString() }}</td>
								</tr>
								<tr>
									<th>Fecha de Modificación</th>
									<td>{{ $updated_at->toFormattedDateString() }}</td>
								</tr>
								<tr>
									<th>Ulitmo inicio de Sesión</th>
									@if($users->last_login == null)
										<td>Sin información</td>
									@else
										<td>{{ $last_login->toFormattedDateString() }}</td>
									@endif
								</tr>
								@endif
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop