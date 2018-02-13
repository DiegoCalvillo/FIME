@extends('layouts.principal')
<?php $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/profesores" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/profesores" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

@section('title', '- Profesores')

@section('content_profesores')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/profesores/search">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Profesores</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" name="nombre_profesor" id="nombre_profesor" placeholder="Buscar por matrícula">
					<span class="input-group-btn">
						<button class="btn btn-defalt" type="submit"><i class="fa fa-search"></i></button>
					</span>
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
									<th>Apellidos</th>
									<th>Nombre(s)</th>
									<th>Matrícula</th>
									<th>Correo electrónico</th>
									<th>Estatus</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($profesores as $profesore)
									<tr>
										<td>{{ $profesore -> apellidos_profesor }}</td>
										<td>{{ $profesore -> nombre_profesor }}</td>
										<td>{{ $profesore -> matricula_profesor }}</td>
										<td>{{ $profesore -> correo_profesor }}</td>
										<td>{{ $profesore -> estatus -> nombre_estatus }}</td>
										<td>
											 <a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('profesores/edit', ['id' => $profesore->id] )}}"> Editar</a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $profesores->links() !!}
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop