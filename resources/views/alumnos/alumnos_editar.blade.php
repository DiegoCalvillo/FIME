@extends('layouts.principal')

@section('title', '- Edición')

@section('content_alumnos_editar')
<div id="page-wrapper">
	{!! Form::model($alumnos, ['route' => 'alumnos/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $alumnos->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edición del Alumno: {{ $alumnos->nombre_alumno }}</h1>
			</div>
		</div>
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
									{!! Form::text('nombre_alumno', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Matrícula') !!}
									{!! Form::text('matricula_alumno', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Estatus del Alumno') !!}
									{!! Form::text('estatus_id', $alumnos -> estatus -> nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Estatus del Alumno') !!}
									<select class="form-control" name="estatus_id">
										<option value="{{ $alumnos->estatus->id }}">Seleccione</option>
										<?php foreach($estatus as $estatus){
											echo '<option value="'.$estatus['id'].'">'.$estatus['nombre_estatus'].'</option>';
										}?>
									</select>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Apellidos') !!}
									{!! Form::text('apellidos_alumno', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Carrera') !!}
									{!! Form::text('carreras_id', $alumnos->carrera->nombre_carrera, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Carrera') !!}
									<select class="form-control" name="carreras_id">
										<option value="{{ $alumnos->carrera->id }}">Seleccione</option>
											<?php foreach($carrera as $carrera){
												echo '<option value="'.$carrera['id'].'">'.$carrera['nombre_carrera'].'</option>';
											}?>
									</select>
								</div>
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