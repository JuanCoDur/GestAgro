@extends('layouts.marcalay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de marcas
			<a href="{{ route('marca.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('marca.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre de la marca</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($marc as $m)
					<tr>
						<td>
							<strong>{{ $m->nomMarca }}</strong>
						</td>
						<td>
							<a href="{{ route('marca.show', $m->id) }}" class="btn btn-primary">Detalles</a>
						</td>
						<td>
							<a href="" data-target="#modal-delete-{{$m->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					    </td>
					</tr>
					@include('marca.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $marc->render() !!}
		@include('marca.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
	
	
@endsection