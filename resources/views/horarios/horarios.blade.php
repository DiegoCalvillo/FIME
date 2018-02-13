@extends('layouts.principal')

@section('title', '- Horarios')

@section('content_horarios')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/horarios/search">
		{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Horarios</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar" name="nombre_horario" id="nombre_horario">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
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
									<th>Nomenclatura</th>
									<th>Rango de Horario</th>
								</tr>
							</thead>
							<tbody>
								@foreach($horarios as $horario)
									<tr>
										<td>{{ $horario -> nombre_horario }}</td>
										<td>{{ $horario -> rango_horario }}</td>
									</tr>
								@endforeach	
							</tbody>
						</table>
						{!! $horarios->links() !!}
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop