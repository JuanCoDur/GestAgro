@extends('layouts.clientelay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar cliente
			<a href="{{ route('clients.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('client.fragment.error')
		{!! Form::model($cli, ['route' => ['clients.update', $cli->id], 'method'=>'PUT']) !!}
			@include('client.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('client.fragment.aside')
	</div>

@endsection