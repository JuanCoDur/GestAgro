@extends('layouts.prelay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de predios
			<a href="{{ route('predio.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('pred.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre del predio</th>
					<th>numLote</th>
					<th>Superficie</th>
					<th>Regimen de humedad</th>
					<th>Tipo de riego</th>
					<th>Latitud</th>
					<th>Longitud</th>
					<th>Altitud</th>
					<th>Observaciones</th>
					
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pre as $predidio)
				<tr>
					<td>
						<strong>{{ $predidio->nombrePredio }}</strong>
					</td>	
					<td>{{ $predidio->numLote }}</td>
					<td>{{ $predidio->superficie }}</td>
					<td>{{ $predidio->regimenHumedad }}</td>
					<td>{{ $predidio->tipRiego }}</td>
					<td>{{ $predidio->latitud }}</td>
					<td>{{ $predidio->longitud }}</td>
					<td>{{ $predidio->altitud }}</td>
					<td>{{ $predidio->observaciones }}</td>
					
					<td>
						<a href="{{ route('predio.show', $predidio->id) }}" class="btn btn-link">ver</a>
					</td>
					<td>
						<a href="{{ route('predio.edit', $predidio->id) }}" class="btn btn-link">editar</a>
					</td>
					<td>
						<form action="{{ route('predio.destroy', $predidio->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $pre->render() !!}
		@include('pred.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection