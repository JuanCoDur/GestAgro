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
					<th>Nombre del producto</th>
				</tr>
			</thead>
			<tbody>
				@foreach($prodd as $productto)
					<tr>
						<td>
							<strong>{{ $productto->nomProducto }}</strong>
						</td>
						<td>
							<a href="{{ route('prod.show', $productto->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="" data-target="#modal-delete-{{$productto->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					    </td>
				</tr>
				@include('product.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $prodd->render() !!}
		@include('produc.fragment.aside')
	</div>
@endsection