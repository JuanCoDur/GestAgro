@extends('layouts.marcalay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nueva Marca
			<a href="{{ route('marca.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('marca.fragment.error')

		{!! Form::open(['route' => 'marca.store']) !!}
			@include('marca.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('marca.fragment.aside')
	</div>

@endsection