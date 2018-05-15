@extends('layouts.vehlay')
@section('content')
	<div class="col-sm-8">
		<h2>
			Vehiculos
			<a href="{{ route('vehic.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('vehi.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($veh as $vehicul)
					<tr>
						<td>{{ $vehicul->idmarc }}</td>
						<td>{{ $vehicul->ModeloVeh }}</td>
						<td>{{ $vehicul->Placa }}</td>						
				
						<td>
							<a href="{{ route('vehic.show', $vehicul->id) }}" class="btn btn-primary">Detalles</a>
						</td>
						<td>
							<a href="" data-target="#modal-delete-{{$vehicul->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					    </td>
					</td>
				</tr>
				@include('vehi.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $veh->render() !!}
		@include('vehi.fragment.aside')
	</div>
@endsection