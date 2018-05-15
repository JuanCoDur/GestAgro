@extends('layouts.prelay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de predios
			<a href="{{ route('predio.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('pred.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre del predio</th>
					<th>Superficie</th>
					
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pre as $predidio)
				<tr>
					<td>
						<strong>{{ $predidio->nombrePredio }}</strong>
					</td>
					<td>{{ $predidio->superficie }}</td>
					<td>
						<a href="{{ route('predio.show', $predidio->id) }}" class="btn btn-primary">Detalles</a>
					</td>
					<td>
						<a href="" data-target="#modal-delete-{{$predidio->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('pred.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $pre->render() !!}
		@include('pred.fragment.aside')
	</div>
@endsection