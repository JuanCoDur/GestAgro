@extends('layouts.vehlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Vehiculo
			<a href="{{ route('vehic.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('vehi.fragment.error')
		{!! Form::model($veh, ['route' => ['vehic.update', $veh->id], 'method'=>'PUT']) !!}
			@include('vehi.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('vehi.fragment.aside')
	</div>

@endsection