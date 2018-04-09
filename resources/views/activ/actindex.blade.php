@extends('layouts.actividadeslay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Actividades realizadas
			<a href="{{ route('activities.create') }}" class="btn btn-primary pull-right">Agregar</a>
		</h2>
		@include('clasif.fragment.info')
		<table class="table table-hover table-striped table-responsive">
			<thead>
				<tr>
					
					<th>Nombre de actividad</th>
					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($act as $acti)
					<tr>						
						<td>
							<strong>{{ $acti->actividadRealizada }}</strong>
						</td>									
						<td>
							<a href="{{ route('activities.show', $acti->id) }}" class="btn btn-link">ver</a>
						</td>
						<td>
							<a href="{{ route('activities.edit', $acti->id) }}" class="btn btn-link">editar</a>
						</td>
						<td>
							<form action="{{ route('activities.destroy', $acti->id) }}" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="_method" value="DELETE">
								<button class="btn btn-link">Borrar</button>
							</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $act->render() !!}
		@include('activ.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
@endsection