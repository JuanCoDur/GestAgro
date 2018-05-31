@extends('layouts.compralay')
@section('content')
	<div class="row">
		<h2>
			Compras Realizadas
			<a href="{{ route('comp.create') }}" class="btn btn-success pull-right">Nuevo</a>
		</h2>
	</div>
		@include('compr.search')
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		<table class="table table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th>Folio</th>
					<th>Fecha</th>
					<th>Proveedor</th>
					<th>Total</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($compras as $comprass)
					<tr>
						<td>{{ $comprass->folioCra }}</td>
						<td>{{ $comprass->fecCompra }}</td>
						<td>{{ $comprass->nomProv }}</td>
						<td>{{ $comprass->total }}</td>
						<td>
							<a href="{{URL::action('ComprasController@show',$comprass->folioCra)}}"><button class="btn btn-primary">Detalles</button></a>
							<!--<a href="{{ route('comp.show', $comprass->folioCra) }}" class="btn btn-primary">Detalles</a>-->
							<a href="" data-target="#modal-delete-{{$comprass->folioCra}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Anular</button></a>
					    </td>
					</tr>
					@include('compr.fragment.modal')
				@endforeach
			</tbody>
		</table>
		</div>
		</div>
		{!! $compras->render() !!}
		<!--@include('clasif.fragment.aside')-->
	</div>
@endsection