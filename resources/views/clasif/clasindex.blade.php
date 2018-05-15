@extends('layouts.claslay')
@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de clasificaciones
			<a href="{{ route('clasifi.create') }}" class="btn btn-success pull-right">Nuevo</a>
		</h2>
		@include('clasif.fragment.info')
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		<table class="table table-striped table-condensed table-hover">
			<thead>
				<tr>
					<th>Nombre de clasificacion</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($class as $claso)
					<tr>
						<td>
							<strong>{{ $claso->nomClasif }}</strong>
						</td>
						<td>
							<a href="{{ route('clasifi.show', $claso->id) }}" class="btn btn-info">Detalles</a>
						</td>
						<!--<td>
							<a href="{{ route('clasifi.edit', $claso->id) }}" class="btn btn-info">editar</a>
						</td>-->
						<td>
							<form action="{{ route('clasifi.destroy', $claso->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-danger">Borrar</button>
							</form>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		</div>
		</div>
		{!! $class->render() !!}
		@include('clasif.fragment.aside')
	</div>
@endsection