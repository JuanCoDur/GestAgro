@extends('layouts.fincalay')

@section('content')
	<div class="col-sm-8">
		<h2> 
			Editar finca
			<a href="{{ route('fincas.index') }}" class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('finc.fragment.error')
		
		{!! Form::model($finc, ['route' => ['fincas.update', $finc->id], 'method' => 'PUT']) !!}
			@include('finc.fragment.form')
		{!! Form::close() !!}
			
	</div>
	<div class="col-sm-4">
		@include('finc.fragment.aside')
	</div>
@endsection