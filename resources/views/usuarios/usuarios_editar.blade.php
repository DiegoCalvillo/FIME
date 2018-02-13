@extends('layouts.principal')

@section('title', '- Editar Usuarios')

@section('content_usuarios_editar')
<div id="page-wrapper">
	{!! Form::model($users, ['route' => 'usuarios/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $users->id) !!}
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Edición del Usuario: {{ $users->name }}</h1>
		</div>
	</div>
	@include('alerts.request')
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					Datos Generales
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								{!! Form::label('full_name', 'Nombre') !!}
								{!! Form::text('name', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('full_name', 'Rol') !!}
								{!! Form::text('puesto_id', $users->puesto->nombre_puesto, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('full_name', 'Estatus') !!}
								{!! Form::text('estatus_id', $users->estatus->nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								{!! Form::label('full_name', 'Matrícula') !!}
								{!! Form::text('matricula', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
							</div>
							<div class="form-group">
								{!! Form::label('full_name', 'Cambiar Rol') !!}
								<select class="form-control" name="puesto" id="puesto">
									<option value="{{ $users->puesto_id }}" selected="true">Seleccionar Rol</option>
										<?php  foreach($puesto as $puestos){
											echo '<option value= "'.$puestos['id'].'">'.$puestos['nombre_puesto'].'</option>';
										}?>
								</select>
							</div>
							<div class="form-group">
								{!! Form::label('full_name', 'Cambiar Estatus') !!}
								<select class="form-control" name="estatus" id="estatus">
									<option value="{{ $users->estatus_id }}">Selecciona</option>
										<?php  foreach($estatus as $estatus){
											echo '<option value= "'.$estatus['id'].'">'.$estatus['nombre_estatus'].'</option>';
										}?>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">
					Credenciales de Usuario
				</div>
				<div class="panel-body">
					<div class="col-lg-12">
						<div class="form-group">
							{!! Form::label('full_name', 'Nombre de Usuario') !!}
							{!! Form::text('username', null, ['class' => 'form-control']) !!}
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Contraseña</label>
							<input class="form-control" type="password" name="password" id="password">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label>Confirmar Contraseña</label>
							<input class="form-control" type="password" name="password2" id="password2">
						</div>
					</div>
				</div>
			</div>
		</div>
		{!! Form::submit('Guardar cambios', ['class' => 'btn btn-success']) !!}
		{!! Form::close() !!}
	</div>
</div>
@stop