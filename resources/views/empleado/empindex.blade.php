@extends('layouts.empleadolay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Lista de empleados
			<a href="{{ route('empleados.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h2>
		@include('empleado.fragment.info')
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Edad</th>
					<th>Estadocivil</th>
					<th>Dependientes-</th>
					<th>Dependientes+</th>
					<th>Discapacidades</th>
					<th>Domicilio</th>
					<th>Telefono</th>
					<th>Celular</th>
					<th>Correo</th>
					<th>Preparacion</th>
					<th>Sueldo</th>
					<th>Cargo</th>
					<th>Jefe</th>
					<th>Subordinados</th>

					<th colspan="3">&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				@foreach($emp as $empleado)
				<tr>
					<td>
						<strong>{{ $empleado->nomemp }}</strong>
					</td>	
					<td>{{ $empleado->edademp }}</td>
					<td>{{ $empleado->edocivil }}</td>
					<td>{{ $empleado->depmenor }}</td>
					<td>{{ $empleado->depmayor }}</td>
					<td>{{ $empleado->discapacidades }}</td>
					<td>{{ $empleado->domemp }}</td>
					<td>{{ $empleado->telcasa }}</td>
					<td>{{ $empleado->celemp }}</td>
					<td>{{ $empleado->email }}</td>
					<td>{{ $empleado->preparacion }}</td>
					<td>{{ $empleado->sueldonto }}</td>
					<td>{{ $empleado->cargo }}</td>
					<td>{{ $empleado->jefedirecto }}</td>
					<td>{{ $empleado->subordinados }}</td>
					<td>
						<a href="{{ route('empleados.show', $empleado->id) }}" class="btn btn-link">ver</a>
					</td>
					<td>
						<a href="{{ route('empleados.edit', $empleado->id) }}" class="btn btn-link">editar</a>
					</td>
					<td>
						<form action="{{ route('empleados.destroy', $empleado->id) }}" method="POST">
							{{ csrf_field() }}
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link">Borrar</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $empleado->render !!}
		@include('empleado.fragment.aside')
	</div>
	<div class="col-sm-4">
		
	</div>
	
	
@endsection