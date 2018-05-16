@extends('layouts.prolay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Nuevo Producto
			<a href="{{ route('prod.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('produc.fragment.error')

		{!! Form::open(['route' => 'prod.store']) !!}
			@include('produc.fragment.form')
		{!! Form::close() !!}
	</div>
@endsection