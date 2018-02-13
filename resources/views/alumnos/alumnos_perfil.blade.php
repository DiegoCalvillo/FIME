@extends('layouts.principal')

@section('content_alumnos_perfil')
<div id="page-wrapper">
	<form>
	{!! Form::hidden('id', $alumnos->id) !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">{{ $alumnos->nombre_alumno }} {{ $alumnos->apellidos_alumno }}</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
					
			</div>
			<div class="col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						Información del Alumno
					</div>
					<div class="panel-body">
						<table width="100%" class="table table-striped table-bordered table-hover">
							<tbody>
								<tr>
									<th>ID asignado por el sistema</th>
									<td>{{ $alumnos->id }}</td>
								</tr>
								<tr>
									<th>Num. Alumno</th>
									<td>{{ $alumnos->matricula_alumno }}</td>
								</tr>
								<tr>
									<th>Carrera</th>
									<td>{{ $alumnos->carrera->nombre_carrera }}</td>
								</tr>
								<tr>
									<th>Estatus Alumno</th>
									<td>{{ $alumnos->estatus->nombre_estatus }}</td>
								</tr>
								<tr>
									<th>Creado por:</th>
									<td>{{ $alumnos->users->name }}</td>
								</tr>
								<tr>
									<th>Fecha de Creación</th>
									<td>{{ $alumnos->created_at }}</td>
								</tr>
								<tr>
									<th>Fecha de Modificación</th>
									<td>{{ $alumnos->updated_at }}</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>	
	</form>
</div>
@stop