@extends('layouts.claslay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nueva clasificacion
			<a href="{{ route('clasifi.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('clasif.fragment.error')

		{!! Form::open(['route' => 'clasifi.store']) !!}
			@include('clasif.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('clasif.fragment.aside')
	</div>

@endsection