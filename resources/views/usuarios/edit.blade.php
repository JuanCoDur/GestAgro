@extends('layouts.usuariolay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar 
		</h2>
		@include('usuarios.fragment.error')
		{!! Form::model($us, ['route' => ['users.update', $us->id], 'method'=>'PUT']) !!}
			@include('usuarios.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('usuarios.fragment.aside')
	</div>
@endsection