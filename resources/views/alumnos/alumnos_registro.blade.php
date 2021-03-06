@extends('layouts.principal')

@section('title', '- Registro')

@section('content_alumnos_registro')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/alumnos/store">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Alumnos</h1>
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
									{!! Form::text('nombre_alumno', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Matrícula') !!}
									{!! Form::text('matricula_alumno', null, ['class' => 'form-control']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Apellidos') !!}
									{!! Form::text('apellidos_alumno', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Carrera') !!}
									{!! Form::select('carrera', $carrera, null, ['class' => 'form-control', 'placeholder' => 'Selecciona Carrera']) !!}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="btn btn-success" type="submit">Registrar</button>
		</div>
	</form>
</div>
@stop