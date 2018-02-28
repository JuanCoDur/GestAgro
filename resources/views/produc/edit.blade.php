@extends('layouts.prolay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar producto
			<a href="{{ route('prod.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('produc.fragment.error')
		{!! Form::model($prodd, ['route' => ['prod.update', $prodd->id], 'method'=>'PUT']) !!}
			@include('produc.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('produc.fragment.aside')
	</div>

@endsectionphp