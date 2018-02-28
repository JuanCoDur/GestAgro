@extends('layouts.provedorlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo Proveedor
			<a href="{{ route('prov.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('proveedr.fragment.error')

		{!! Form::open(['route' => 'prov.store']) !!}
			@include('proveedr.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('proveedr.fragment.aside')
	</div>

@endsection