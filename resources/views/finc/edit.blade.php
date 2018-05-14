@extends('layouts.fincalay')

@section('content')
	<div class="col-sm-8">
		<h5> 
			Editar finca
			<a href="{{ route('finca.index') }}" class="btn btn-default pull-right">Listado</a>
		</h5>
		@include('finc.fragment.error')
		
		{!! Form::model($finc, ['route' => ['finca', $finc->id], 'method' => 'PUT']) !!}
			@include('finc.fragment.form')
		{!! Form::close() !!}
			
	</div>
	<div class="col-sm-4">
		@include('finc.fragment.aside')
	</div>
@endsection