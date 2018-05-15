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
					<th>Nombre del tipo</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($tp as $tipo)
				<tr>
					<td>
						<strong>{{ $tipo->nomTipo }}</strong>
					</td>
					
				
					<td>
						<a href="{{ route('tipveh.show', $tipo->id) }}" class="btn btn-primary">Detalles</a>
					</td>
					<td>
						<a href="" data-target="#modal-delete-{{$tipo->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
				    </td>
				</tr>
				@include('tipvehlo.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $tp->render() !!}
		@include('tipvehlo.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
	
	
@endsection