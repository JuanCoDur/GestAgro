@extends('layouts.empleadolay')

@section('content')

	{{--<div >--}}
		{{--<h5>--}}
			{{--{{ $emplea->nomemp }}--}}
			{{--<a href="{{ route('empleado.edit', $emplea->id) }}"class="btn btn-default pull-right">Editar</a>--}}
		{{--</h5>--}}
	{{--</div>--}}
	{{--<p>--}}
		{{--{{ $emplea->celemp }}--}}
		{{--{{ $emplea->domemp }}--}}
		{{--{{ $emplea->edocivil }}--}}
	{{--</p>--}}
	{{--<div>--}}
		{{--@include('empleado.fragment.aside')--}}
	{{--</div>--}}

	<div class="row">
		<div class="col-sm-12">
			{{--<h2>--}}
			{{--{{ $class->nomClasif }}--}}
			{{--<a href="{{ route('clasifi.edit', $class->id) }}"class="btn btn-default pull-right">Editar</a>--}}
			{{--</h2>--}}
			<a href="{{ route('empleado.index') }}" class="btn btn-info" role="button">Regresar</a>

			<a href="{{ route('empleado.edit', $emplea->id) }}" class="btn btn-info">Editar</a>

			<div class="col-sm-8">
				<div>
					<br>
					<label>Nombre</label><br>
					<input id="NomEmp" type="text" disabled>{{ $emplea->nomemp }}
				</div>
				<div>
					<br>
					<label>Edad</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->edademp }}</label>
				</div>
				<div>
					<br>
					<label>Estado Civil</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->edocivil }}</label>
				</div>
				<div>
					<br>
					<label>Dependientes Menores</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->depmenor }}</label>
				</div>
				<div>
					<br>
					<label>Dependientes Mayores</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->depmayor }}</label>
				</div>
				<div>
					<br>
					<label>Discapacidades</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->discapacidades }}</label>
				</div>
				<div>
					<br>
					<label>Domicilio</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->domemp }}</label>
				</div>
				<div>
					<br>
					<label>Teléfono Fijo</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->telcasa }}</label>
				</div>
				<div>
					<br>
					<label>Teléfono Celular</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->celemp }}</label>
				</div>
				<div>
					<br>
					<label>Correo Electrónico</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->email }}</label>
				</div>
				<div>
					<br>
					<label>Preparación</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->preparacion }}</label>
				</div>
				<div>
					<br>
					<label>Sueldo Neto</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->sueldonto }}</label>
				</div>
				<div>
					<br>
					<label>Cargo</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->cargo }}</label>
				</div>
				<div>
					<br>
					<label>Jefe Directo</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->jefedirecto }}</label>
				</div>
				<div>
					<br>
					<label>Subordinado(s)</label><br>
					<label for="" style="background-color: wheat">{{ $emplea->subordinados }}</label>
				</div>
			</div>
		</div>
	</div>

@endsection