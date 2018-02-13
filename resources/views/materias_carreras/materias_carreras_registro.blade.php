@extends('layouts.principal')

@section('title', '- Materias Registro')

@section('content_materias_carrera_registro')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/materias_carreras/store">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Registro de Materias de Carrera</h1>
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
									{!! Form::label('full_name', 'Nombre de la materia') !!}
									{!! Form::text('nombre_materia', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Semestre') !!}
									<select class="form-control" name="semestre_materia">
										<option disabled="disabled">Selecciona</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
										<option value="10">10</option>
									</select>
								</div>
								<div>
									{!! Form::label('full_name', 'Tipo de Materia') !!}
									{!! Form::select('tipomateria', $tipomateria, null, ['class' => 'form-control', 'placeholder' => 'Selecciona el Tipo de Matería']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Créditos') !!}
									{!! Form::text('creditos', null, ['class' => 'form-control']) !!}
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