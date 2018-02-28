@extends('layouts.tplay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo Tipo
			<a href="{{ route('tipveh.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('tipvehlo.fragment.error')

		{!! Form::open(['route' => 'tipveh.store']) !!}
			@include('tipvehlo.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('tipvehlo.fragment.aside')
	</div>

@endsection