@extends('layouts.principal')
<?php $message=Session::get('message') ?>

	@if($message == 'store')
		<div class="alert alert-success" role="alert">
        Registro creado exitosamente <a href="/usuarios" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

	@if($message == 'edit')
		<div class="alert alert-success" role="alert">
        Registro modificado exitosamente <a href="/usuarios" class="alert-link">Click aqui para quitar mensaje</a>.
        </div>
	@endif

@section('title', '- Usuarios')

@section('content_usuarios')
<div id="page-wrapper">
	<form>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Usuarios</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" name="username" id="username" placeholder="Buscar por Nombre de Usuario">
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
									<th>Usuario</th>
									<th>Nombre</th>
									<th>Opciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $users)
								<tr>
									<td>
										<a href="{{ route('usuarios/show', ['id' => $users->id]) }}">
											{{ $users->username }}
										</a>
									</td>
									<td>
										{{ $users->name }}
									</td>
									<td>
										<a class="btn btn-primary btn-xs glyphicon glyphicon-pencil" href="{{ route('usuarios/edit', ['id' => $users->id] )}}"> Editar</a>
									</td>
								</tr>	
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop