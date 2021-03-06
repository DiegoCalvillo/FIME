@extends('layouts.principal')

@section('title', '- Edición de Materias')

@section('content_materias_comunes_editar')
<div id="page-wrapper">
	{!! Form::model($materias_comunes, ['route' => 'materias_comunes/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $materias_comunes->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edición de Materia: {{ $materias_comunes->nombre_materia }}</h1>
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
									{!! Form::label('full_name', 'Nombre de la Materia') !!}
									{!! Form::text('nombre_materia', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Semestre') !!}
									{!! Form::text('semestre_materia', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Tipo de Materia') !!}
									{!! Form::text('tipo_materia_id', $materias_comunes -> TipoMateria -> nombre_tipo_materia, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Estatus') !!}
									{!! Form::text('estatus_id', $materias_comunes->estatus->nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Créditos') !!}
									{!! Form::text('creditos', null, ['class' => 'form-control']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Semestre') !!}
									<select class="form-control" name="semestre_materia">
										<option value="{{ $materias_comunes->semestre_materia }}">Selecione</option>
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
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar el tipo de Materia') !!}
									<select class="form-control" name="tipo_materia_id">
										<option value="{{ $materias_comunes->TipoMateria->id }}">Seleccione</option>
										<?php foreach($tipo_materia as $tipo_materia){
											echo '<option value="'.$tipo_materia['id'].'">'.$tipo_materia['nombre_tipo_materia'].'</option>';
										}?>
									</select>
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Estatus') !!}
									<select class="form-control" name="estatus_id">
										<option value="{{ $materias_comunes->estatus->id }}">Seleccione</option>
										<?php foreach($estatus as $estatus){
											echo '<option value="'.$estatus['id'].'">'.$estatus['nombre_estatus'].'</option>';
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