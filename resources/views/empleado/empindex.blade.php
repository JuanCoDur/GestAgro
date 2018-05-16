@extends('layouts.empleadolay')

@section('content')
	<div class="col-sm-8">
		<h4 class="rgba-orange-strong">
			<strong>Lista de empleados</strong> 
			<a href="{{ route('empleado.create') }}" class="btn btn-primary pull-right">Nuevo</a>
		</h4>
		@include('empleado.fragment.info')
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
		<table class="table table-striped table-condensed table-hover rgba-orange-strong">
			<thead>
				<tr>
					<th>Nombre</th>
					<!--{{--<th>Edad</th>--}}
					{{--<th>Estadocivil</th>--}}
					{{--<th>Dependientes-</th>--}}
					{{--<th>Dependientes+</th>--}}
					{{--<th>Discapacidades</th>--}}
					{{--<th>Domicilio</th>--}}
					{{--<th>Telefono</th>--}}
					{{--<th>Celular</th>--}}
					{{--<th>Correo</th>--}}
					{{--<th>Preparacion</th>--}}
					{{--<th>Sueldo</th>--}}
					<th>Cargo</th>
					{{--<th>Jefe</th>--}}
					{{--<th>Subordinados</th>--}}-->

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
					<!--{{--<td>{{ $empleado->edocivil }}</td>--}}
					{{--<td>{{ $empleado->depmenor }}</td>--}}
					{{--<td>{{ $empleado->depmayor }}</td>--}}
					{{--<td>{{ $empleado->discapacidades }}</td>--}}
					{{--<td>{{ $empleado->domemp }}</td>--}}
					{{--<td>{{ $empleado->telcasa }}</td>--}}
					{{--<td>{{ $empleado->celemp }}</td>--}}
					{{--<td>{{ $empleado->email }}</td>--}}
					{{--<td>{{ $empleado->preparacion }}</td>--}}
					{{--<td>{{ $empleado->sueldonto }}</td>--}}
					<td>{{ $empleado->cargo }}</td>
					{{--<td>{{ $empleado->jefedirecto }}</td>--}}
					{{--<td>{{ $empleado->subordinados }}</td>--}}-->
					<td>
						<a href="{{ route('empleado.show', $empleado->id) }}" class="btn btn-info">Detalles</a>
					</td>
					<!--{{--<td>--}}
						{{--<a href="{{ route('empleado.edit', $empleado->id) }}" class="btn btn-info">editar</a>--}}
					{{--</td>--}}
					{{--<td>--}}
						{{--<form action="{{ route('empleado.destroy', $empleado->id) }}" method="POST">--}}
							{{--{{ csrf_field() }}--}}
							{{--<input type="hidden" name="_method" value="DELETE">--}}
							{{--<button class="btn btn-danger">Borrar</button>--}}
						{{--</form>--}}
					{{--</td>--}}-->
				</tr>
				@endforeach
			</tbody>
		</table>
		</div>
		</div>
		{!! $emp->render() !!}
		
	</div>
	<div class="col-sm-4">
		@include('empleado.fragment.aside')
	</div>
	
	
@endsection