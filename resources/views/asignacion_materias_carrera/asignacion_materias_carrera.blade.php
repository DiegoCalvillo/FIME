@extends('layouts.principal')

@section('title', '- Asignación Materias Carrera')

@section('content_asignacion_materias_carrera')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/asignacion_materias_carrera/store" accept-charset="UTF-8" enctype="multipart/form-data">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Asignación de Horarios de Materias de Carrera</h1>
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
									{!! Form::label('full_name', 'Elija la carrera') !!}
									{!! Form::select('carrera', $carrera, null, ['id' => 'carrera','class' => 'form-control', 'placeholder' => 'Selecciona Carrera']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Elija el Horario') !!}
									{!! Form::select('horarios', $horarios, null, ['id' => 'horarios', 'class' => 'form-control', 'placeholder' => 'Selecciona el Horario']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Elija el Profesor') !!}
									{!! Form::select('profesores', $profesores, null, ['id' => 'profesores', 'class' => 'form-control', 'placeholder' => 'Selecciona el Profesor']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Escoja la materia') !!}
									{!! Form::select('materias', ['placeholder' => 'Seleccione una Materia'], null, ['id' => 'materias', 'class' => 'form-control', 'required' => 'required']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Elija el día') !!}
									{!! Form::select('dias', $dias, null, ['id' => 'dias', 'class' => 'form-control', 'placeholder' => 'Selecciona el día']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Salón') !!}
									{!! Form::text('salon', null, ['class' => 'form-control', 'placeholder' => 'Deben ser 4 digitos en la numeración del salon']) !!}
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
