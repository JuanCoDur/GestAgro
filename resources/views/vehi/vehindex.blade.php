@extends('layouts.vehlay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de vehiculos
			<a href="{{ route('vehic.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('vehi.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Marca</th>
					<th>Combustible</th>
					<th>Rendimiento</th>
					<th>Modelo</th>
					<th>Año</th>
					<th>Depreciacion</th>
					<th>Valor Actual</th>
					<th>Placa</th>
					
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($veh as $vehicul)
					<tr>
						<td>{{ $vehicul->Marca }}</td>
						<td>{{ $vehicul->Combustible }}</td>
						<td>{{ $vehicul->Rendimiento }}</td>
						<td>
							<strong>{{ $vehicul->ModeloVeh }}</strong>
						</td>
						<td>{{ $vehicul->yearFabricacion }}</td>
						<td>{{ $vehicul->Adepreciacion }}</td>
						<td>{{ $vehicul->ValorActVeh }}</td>
						<td>{{ $vehicul->Placa }}</td>						
				
						<td>
							<a href="{{ route('vehic.show', $vehicul->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('vehic.edit', $vehicul->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('vehic.destroy', $vehicul->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $veh->render() !!}
		@include('vehi.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
	
	
@endsection