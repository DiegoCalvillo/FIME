@extends('layouts.principal')
<?php $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/materias_comunes" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro modificado exitosamente <a href="/materias_comunes" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

@section('title', '- Materias por Carrera')

@section('content_materias_carrera')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/materias_carreras/search">
		{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Materias de Carrera</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<select class="form-control" name="carrera_id">
						<option value="disabled" disabled="disabled">Filtrar por Carrera</option>
						<?php foreach($carrera as $carrera){
							echo '<option value="'.$carrera['id'].'">'.$carrera['nombre_carrera'].'</option>';
						}?>
					</select>
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group input-group">
					<a href="http://localhost:8080/materias_carreras/create" class="btn btn-primary">Agregar nueva materia</a>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Registros
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>Materia</th>
									<th>Créditos</th>
									<th>Carrera</th>
									<th>Semestre</th>
									<th>Tipo de Materia</th>
									<th>Estatus</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($materias_carreras as $materias_carrera)
									<tr>
										<td>{{ $materias_carrera -> nombre_materia }}</td>
										<td>{{ $materias_carrera -> creditos }}</td>
										<td>{{ $materias_carrera -> carrera -> abr_carrera }}</td>
										<td>{{ $materias_carrera -> semestre_materia }}</td>
										<td>{{ $materias_carrera -> TipoMateria -> nombre_tipo_materia }}</td>
										<td>{{ $materias_carrera -> estatus -> nombre_estatus }}</td>
										<td>
											<a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('materias_carreras/edit', ['id' => $materias_carrera->id] )}}"> Editar</a>
										</td>
									</tr>
								@endforeach	
							</tbody>
						</table>
						{!! $materias_carreras->links() !!}
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop