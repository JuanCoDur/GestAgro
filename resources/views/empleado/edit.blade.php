@extends('layouts.empleadolay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Empleado
			<a href="{{ route('empleados.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('empleado.fragment.error')

		{!! Form::model($emplea, ['route' => ['empleados.update', $emplea->id], 'method' => 'PUT']) !!}
			@include('empleado.fragment.form')
		{!! Form::close() !!}
	</div>
	<div class="col-sm-4">
		@include('empleado.fragment.aside')
	</div>
@endsection