@extends('layouts.provedorlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar proveedor
			<a href="{{ route('prov.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('proveedr.fragment.error')
		{!! Form::model($prove, ['route' => ['prov.update', $prove->id], 'method'=>'PUT']) !!}
			@include('proveedr.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('proveedr.fragment.aside')
	</div>

@endsectionphp