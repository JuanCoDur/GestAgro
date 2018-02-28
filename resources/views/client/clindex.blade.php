@extends('layouts.clientelay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de clientes
			<a href="{{ route('clients.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('client.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Domicilio</th>
					<th>Telefono</th>
					<th>Correo electronico</th>
					<th>RFC</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cli as $clien)
					<tr>
						<td>
							<strong>{{ $clien->nomCte }}</strong>
						</td>
						<td>{{ $clien->domCte }}</td>
						<td>{{ $clien->telCte }}</td>
						<td>{{ $clien->emailCte }}</td>
						<td>{{ $clien->RFCte }}</td>
						<td>
							<a href="{{ route('clients.show', $clien->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('clients.edit', $clien->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('clients.destroy', $clien->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{!! $cli->render() !!}
		@include('client.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection