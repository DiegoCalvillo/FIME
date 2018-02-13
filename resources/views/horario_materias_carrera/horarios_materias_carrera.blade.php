@extends('layouts.principal')

@section('title', 'Horarios de Materias')

@section('content_horarios_materias_carrera')
<div id="page-wrapper">
	<form>
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Horarios Materias</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" name="">
					<span class="input-group-btn"><button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button></span>
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
									<th>Hora</th>
									<th>Dia</th>
									<th>Maestro</th>
									<th>Salón</th>
								</tr>
							</thead>
							<tbody>
								@foreach($asignacion_materias as $asignacion_materias)
									<tr>
										<td>{{ $asignacion_materias->Materias_Carrera->nombre_materia }}</td>
										<td>{{ $asignacion_materias->Horarios->nombre_horario }}</td>
										<td>{{ $asignacion_materias->Dias->nombre_dia }}</td>
										<td>{{ $asignacion_materias->Profesores->nombre_profesor }}</td>
										<td>{{ $asignacion_materias->salon }}</td>
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