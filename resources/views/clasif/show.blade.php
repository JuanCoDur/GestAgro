@extends('layouts.claslay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $class->nomClasif }}
			<a href="{{ route('clasifi.edit', $class->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  S.A de C.V</p>
	<div class="col-sm-4">
		@include('clasif.fragment.aside')
	</div>

@endsection