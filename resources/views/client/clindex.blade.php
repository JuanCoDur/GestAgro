@extends('layouts.clientelay')

@section('content')
	<div class="col-sm-10">
		<h2>
			Lista de clientes
			<a href="{{ route('clients.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		{{--@include('client.fragment.info')--}}
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($cli as $clien)
					<tr>
						<td>
							<strong>{{ $clien->nomCte }}</strong>
						</td>
						<td>
							<a href="{{ route('clients.show', $clien->id) }}" class="btn btn-primary">Detalles</a>
						</td>
						<td>
							<a href="" data-target="#modal-delete-{{$clien->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					    </td>
					</tr>
					@include('client.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $cli->render() !!}
		@include('client.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection