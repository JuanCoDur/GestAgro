@extends('layouts.empleadolay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $emplea->nomemp }}
			<a href="{{ route('empleados.edit', $emplea->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>
		{{ $emplea->celemp }}
		{{ $emplea->domemp }}
		{{ $emplea->edocivil }}
	</p>
	<div class="col-sm-4">
		@include('empleado.fragment.aside')
	</div>

@endsection