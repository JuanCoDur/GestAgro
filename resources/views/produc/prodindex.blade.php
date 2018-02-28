@extends('layouts.prolay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de productos
			<a href="{{ route('prod.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('produc.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					
					<th width="20xp">Clasif</th>
					<th>Nombre del producto</th>
					<th>Descripcion del producto</th>
					<th>costo</th>
					<th>Precio de venta</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($prodd as $productto)
					<tr>
						
						<td>
							{{ $productto->idClasif }}
						</td>
						<td>
							<strong>{{ $productto->nomProducto }}</strong>
						</td>
						<td>{{ $productto->descripcion }}</td>
						<td>{{ $productto->costo }}</td>
						<td>{{ $productto->preciovta }}</td>
				
						<td>
							<a href="{{ route('prod.show', $productto->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('prod.edit', $productto->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('prod.destroy', $productto->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $prodd->render() !!}
		@include('produc.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection