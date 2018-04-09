@extends('layouts.actividadeslay')

@section('content')
	<div class="col-sm-8">
		<h2>
			Editar actividad
			<a href="{{ route('activities.index') }}"class="btn btn-default pull-right">Listado</a>
		</h2>
		@include('activ.fragment.error')
		{!! Form::model($act, ['route' => ['activities.update', $act->id], 'method'=>'PUT']) !!}
			@include('activ.fragment.form')
		{!! Form::close() !!}
	</div>
	
	<div class="col-sm-4">
		@include('activ.fragment.aside')
	</div>
@endsection