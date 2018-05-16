@extends('layouts.pozlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Agregar Pozo
			<a href="{{ route('pozo.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>

		@include('poozos.fragment.error')

		{!! Form::open(['route' => 'pozo.store']) !!}
			@include('poozos.fragment.form')
		{!! Form::close() !!}
	</div>
	
@endsection