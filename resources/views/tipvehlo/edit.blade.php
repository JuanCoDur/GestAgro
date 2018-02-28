@extends('layouts.tplay')

@section('content')

	<div class="col-sm-8">
		<h2>
			Editar Tipo
			<a href="{{ route('tipveh.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('tipvehlo.fragment.error')
		{!! Form::model($tp, ['route' => ['tipveh.update', $tp->id], 'method'=>'PUT']) !!}
			@include('tipvehlo.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('tipvehlo.fragment.aside')
	</div>

@endsection