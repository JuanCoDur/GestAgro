@extends('layouts.empleadolay')
@section('content')

	<div class="col-sm-8">
		<h4>
			<strong>Nuevo Empleado</strong>
			<a href="{{ route('empleado.index') }}"class="btn btn-default pull-right">Listado</a>
		</h4>

		@include('empleado.fragment.error')

		{!! Form::open(['route' => 'empleado.store']) !!}

		@include('empleado.fragment.form')

		{!! Form::close() !!}
	</div>
@endsection