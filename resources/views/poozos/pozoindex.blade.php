@extends('layouts.pozlay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Listado de pozos
			<a href="{{ route('pozo.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('poozos.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Pozo</th>
					<th>Medidor</th>
					<th>Ubicacion</th>
					<th>Latitud</th>
					<th>Longitud</th>
					<th>Altitud</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($poz as $pozoss)
				<tr>
					<td>
						<strong>{{ $pozoss->pozo }}</strong>
					</td>	
					<td>{{ $pozoss->medidor }}</td>
					<td>{{ $pozoss->ubicacionPzo }}</td>
					<td>{{ $pozoss->latitud }}</td>
					<td>{{ $pozoss->longitud }}</td>
					<td>{{ $pozoss->altitud }}</td>
					
					<td>
						<a href="{{ route('pozo.show', $pozoss->id) }}" class="btn btn-link">ver</a>
					</td>
					<td>
						<a href="{{ route('pozo.edit', $pozoss->id) }}" class="btn btn-link">editar</a>
					</td>
					<td>
						<form action="{{ route('pozo.destroy', $pozoss->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $poz->render() !!}
		@include('poozos.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection