
@extends('layouts.fincalay')

@section('content')
	<div class="col-sm-8">
		<h4> <strong>Finca </strong>
			<a href="{{ route('finca.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h4>
		@include('finc.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					
					<th>Nombre de la finca</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($finc as $fi)
				<tr>
					<td>
						<strong>{{ $fi->nomfinca }}</strong>
					</td>
					<td>{{ $fi->telfinca }}</td>
					<td>
						<a href="{{ route('finca.show', $fi->id) }}" class="btn btn-primary">Detalles</a>
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
