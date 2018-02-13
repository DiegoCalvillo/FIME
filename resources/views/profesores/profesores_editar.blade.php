@extends('layouts.principal')

@section('title', '- Editar')

@section('content_profesores_editar')
<div id="page-wrapper">
	{!! Form::model($profesores, ['route' => 'profesores/update', 'method' => 'put', 'novalidate']) !!}
	{!! Form::hidden('id', $profesores->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edición del profesor: {{ $profesores->nombre_profesor }}</h1>
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
									{!! Form::text('nombre_profesor', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Matrícula') !!}
									{!! Form::text('matricula_profesor', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
							</div>
							<div class="col-lg-6">
								<div class="form-group">
									{!! Form::label('full_name', 'Apellidos') !!}
									{!! Form::text('apellidos_profesor', null, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Estatus del profesor') !!}
									{!! Form::text('estatus_id', $profesores -> estatus -> nombre_estatus, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
								</div>
								<div class="form-group">
									{!! Form::label('full_name', 'Cambiar Estatus del profesor') !!}
									<select class="form-control" name="estatus_id">
										<option value="{{ $profesores->estatus->id }}">Seleccione</option>
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