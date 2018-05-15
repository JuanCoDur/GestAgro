@extends('layouts.provedorlay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Proveedores
			<a href="{{ route('prov.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('proveedr.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>RFC del Proveedor</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($prove as $proveedors)
					<tr>
						<td>
							<strong>{{ $proveedors->nomProv }}</strong>
						</td>	
						<td>
							{{ $proveedors->RFCProv }}
						</td>
						<td>
							<a href="{{ route('prov.show', $proveedors->id) }}" class="btn btn-primary">Detalles</a>
						</td>
						<td>
							<a href="" data-target="#modal-delete-{{$proveedors->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					    </td>
					</tr>	
				@include('proveedr.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $prove->render() !!}
		@include('proveedr.fragment.aside')
	</div>
@endsection