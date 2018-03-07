@extends('layouts.empleadolay')

@section('content')

	<div >
		<h5>
			{{ $emplea->nomemp }}
			<a href="{{ route('empleados.edit', $emplea->id) }}"class="btn btn-default pull-right">Editar</a>
		</h5>
	</div>
	<p>
		{{ $emplea->celemp }}
		{{ $emplea->domemp }}
		{{ $emplea->edocivil }}
	</p>
	<div>
		@include('empleado.fragment.aside')
	</div>

@endsection