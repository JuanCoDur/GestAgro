@extends('layouts.actividadeslay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $act->actividadRealizada }}
			<a href="{{ route('activities.edit', $act->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  S.A de C.V</p>
	<div class="col-sm-4">
		@include('activ.fragment.aside')
	</div>

@endsection