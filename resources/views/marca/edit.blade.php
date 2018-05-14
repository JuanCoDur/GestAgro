@extends('layouts.marcalay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Marca
			<a href="{{ route('marca') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('marca.fragment.error')
		{!! Form::model($marc, ['route' => ['marca', $marc->id], 'method'=>'PUT']) !!}
			@include('marca.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('marca.fragment.aside')
	</div>

@endsection

