@extends('layouts.provedorlay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de proveedores
			<a href="{{ route('prov.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('proveedr.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>RFC del Proveedor</th>
					<th>Nombre</th>
					<th>Domicilio</th>
					<th>Telefono</th>
					<th>Correo</th>
					<th>Empresa</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($prove as $proveedors)
					<tr>	
						<td>
							{{ $proveedors->RFCProv }}
						</td>
						<td>
							<strong>{{ $proveedors->nomProv }}</strong>
						</td>
						<td>{{ $proveedors->domProv }}</td>
						<td>{{ $proveedors->telProv }}</td>
						<td>{{ $proveedors->emailProv }}</td>
						<td>{{ $proveedors->empresaProv }}</td>
				
						<td>
							<a href="{{ route('prov.show', $proveedors->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('prov.edit', $proveedors->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('prov.destroy', $proveedors->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $prove->render() !!}
		@include('proveedr.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection