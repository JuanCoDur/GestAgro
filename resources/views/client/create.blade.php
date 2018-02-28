@extends('layouts.clientelay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo Cliente
			<a href="{{ route('clients.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('client.fragment.error')

		{!! Form::open(['route' => 'clients.store']) !!}
			@include('client.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('client.fragment.aside')
	</div>

@endsection