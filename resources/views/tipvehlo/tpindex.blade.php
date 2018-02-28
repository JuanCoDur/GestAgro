@extends('layouts.tplay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de tipos
			<a href="{{ route('tipveh.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('tipvehlo.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20xp">ID</th>
					<th width="20xp">Marca</th>
					<th>Nombre del tipo</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tp as $tipo)
					<tr>
						<td>{{ $tipo->id }}</td>
						<td>{{ $tipo->idmarc }}</td>
						<td>
							<strong>{{ $tipo->nomTipo }}</strong>
						</td>
					
				
						<td>
							<a href="{{ route('tipveh.show', $tipo->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('tipveh.edit', $tipo->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('tipveh.destroy', $tipo->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $tp->render() !!}
		@include('tipvehlo.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
	
	
@endsection