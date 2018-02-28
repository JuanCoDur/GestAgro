@extends('layouts.marcalay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $marc->nomMarca }}
			<a href="{{ route('marcas.edit', $marc->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  S.A de C.V</p>
	<div class="col-sm-4">
		@include('marca.fragment.aside')
	</div>

@endsection

