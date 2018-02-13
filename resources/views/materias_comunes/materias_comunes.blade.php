@extends('layouts.principal')
<?php $message=Session::get('message') ?>
	
	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/materias_comunes" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/materias_comunes" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif


@section('title', '- Materias Comunes')

@section('content_materias_comunes')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/materias_comunes/search">
		{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Materias Comunes</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar" name="nombre_materia" id="nombre_materia">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
					</span>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="form-group input-group">
					<a href="http://192.168.1.66:8080/materias_comunes/create" class="btn btn-primary">Agregar nueva materia</a>
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
									<th>Semestre</th>
									<th>Tipo de Materia</th>
									<th>Estatus</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($materias_comunes as $materias_comune)
									<tr>
										<td>{{ $materias_comune -> nombre_materia }}</td>
										<td>{{ $materias_comune -> creditos }}</td>
										<td>{{ $materias_comune -> semestre_materia }}</td>
										<td>{{ $materias_comune -> TipoMateria -> nombre_tipo_materia }}</td>
										<td>{{ $materias_comune -> estatus -> nombre_estatus }}</td>
										<td>
											<a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('materias_comunes/edit', ['id' => $materias_comune->id] )}}"> Editar</a>
										</td>
									</tr>
								@endforeach	
							</tbody>
						</table>
						{!! $materias_comunes->links() !!}
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop