@extends('layouts.prelay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo Predio
			<a href="{{ route('predio.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('pred.fragment.error')

		{!! Form::open(['route' => 'predio.store']) !!}
			@include('pred.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('pred.fragment.aside')
	</div>

@endsection