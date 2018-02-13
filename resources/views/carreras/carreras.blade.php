@extends('layouts.principal')

@section('title', '- Carreras')

@section('content_carreras')
<div id="page-wrapper">
	<form method="POST" action="http://192.168.1.66:8080/carreras/search">
		{!! csrf_field() !!}
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Carreras</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="form-group input-group">
					<input type="text" class="form-control" placeholder="Buscar" name="abr_carrera" id="abr_carrera">
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
									<th>Abreviatura</th>
									<th>Nombre de la Carrera</th>
								</tr>
							</thead>
							<tbody>
								@foreach($carreras as $carrera)
									<tr>
										<td>{{ $carrera -> abr_carrera }}</td>
										<td>{{ $carrera -> nombre_carrera }}</td>
									</tr>
								@endforeach	
							</tbody>
						</table>
						{!! $carreras->links() !!}
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
@stop