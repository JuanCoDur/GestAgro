@extends('layouts.claslay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de clasificaciones
			<a href="{{ route('clasifi.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('clasif.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					
					<th>Nombre de clasificacion</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($class as $claso)
					<tr>
						
						<td>
							<strong>{{ $claso->nomClasif }}</strong>
						</td>
					
				
						<td>
							<a href="{{ route('clasifi.show', $claso->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('clasifi.edit', $claso->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('clasifi.destroy', $claso->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $class->render() !!}
		@include('clasif.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection