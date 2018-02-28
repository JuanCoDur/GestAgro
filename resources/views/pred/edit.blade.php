@extends('layouts.prelay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Predio
			<a href="{{ route('predio.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('pred.fragment.error')
		{!! Form::model($pre, ['route' => ['predio.update', $pre->id], 'method'=>'PUT']) !!}
			@include('pred.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('pred.fragment.aside')
	</div>

@endsection