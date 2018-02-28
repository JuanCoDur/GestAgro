@extends('layouts.marcalay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de marcas
			<a href="{{ route('marcas.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('marca.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th width="20xp">ID</th>
					<th>Nombre de la marca</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($marc as $m)
					<tr>
						<td>{{ $m->id }}</td>
						<td>
							<strong>{{ $m->nomMarca }}</strong>
						</td>
					
				
						<td>
							<a href="{{ route('marcas.show', $m->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('marcas.edit', $m->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('marcas.destroy', $m->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $marc->render() !!}
		@include('marca.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
	
	
@endsection