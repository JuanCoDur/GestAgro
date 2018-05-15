@extends('layouts.pozlay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Pozos
			<a href="{{ route('pozo.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('poozos.fragment.info')
		<table class="table table-hover table-striped table-responsive">
			<thead>
				<tr>
					<th>Pozo</th>
					<th>Ubicacion</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($poz as $pozoss)
				<tr>
					<td>
						<strong>{{ $pozoss->pozo }}</strong>
					</td>	
					<td>{{ $pozoss->ubicacionPzo }}</td>
					<td>
						<a href="{{ route('pozo.show', $pozoss->id) }}" class="btn btn-primary">Detalles</a>
					</td>
					<td>
						<a href="" data-target="#modal-delete-{{$pozoss->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@include('poozos.fragment.modal')
				@endforeach
			</tbody>
		</table>
		{!! $poz->render() !!}
		@include('poozos.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection