@extends('layouts.fincalay')

@section('content')
	<div class="col-sm-8">
		<h5> 
			Nueva finca
			<a href="{{ route('finca.index') }}" class="btn btn-default pull-right">Regresar</a>
		</h5>
		@include('finc.fragment.error')

		{!! Form::open(['route' => 'finca.store']) !!}
			@include('finc.fragment.form')
		{!! Form::close() !!}
		
	</div>
	<div class="col-sm-4">
		@include('finc.fragment.aside')
	</div>
@endsection