
@extends('layouts.fincalay')

@section('content')
	<div class="col-sm-8">
		<h5> Listado de fincas 
			<a href="{{ route('finca.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h5>
		@include('finc.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					
					<th>Nombre de la finca</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($finc as $finca)
				<tr>
					<td>
						<strong>{{ $finca->nomfinca }}</strong>
						{{ $finca->domfinca }}
						{{ $finca->ciudad }}
						{{ $finca->estado }}
					</td>
					<td>{{ $finca->telfinca }}</td>
					<td>
						<a href="{{ route('finca.index', $finca->id) }}" class=" btn btn-link">ver</a>
					</td>
					<td>
						<a href="{{ route('finca.edit', $finca->id) }}" class=" btn btn-link">editar</a>
					</td>
					<td>
						<form action="{{ route('finca.destroy', $finca->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class=" btn btn-link">borrar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $finc->render() !!}
	</div>
	<div class="col-sm-4">
		@include('finc.fragment.aside')
	</div>
@endsection
