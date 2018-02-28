@extends('layouts.tplay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $tp->idmarc }}
			{{ $tp->nomMarca }}
			<a href="{{ route('tipveh.edit', $tp->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  S.A de C.V</p>
	<div class="col-sm-4">
		@include('tipvehlo.fragment.aside')
	</div>

@endsection