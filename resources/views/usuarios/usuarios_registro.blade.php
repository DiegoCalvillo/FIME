@extends('layouts.principal')

@section('title', '- Crear Usuario')

@section('content_usuarios_registro')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/usuarios/store">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Usuarios</h1>
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
									{!! Form::text('name', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Asignar Rol') !!}
									{!! Form::select('puestos', $puestos, null, ['class' => 'form-control', 'placeholder' => 'Seleccionar Rol']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Matrícula') !!}
									{!! Form::text('matricula', null, ['class' => 'form-control']) !!}
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
		</div>
		<button class="btn btn-primary" type="submit">Registrar Usuario</button>
	</form>
</div>
@stop