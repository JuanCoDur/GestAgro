@extends('layouts.prolay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $prodd->nomProducto }}
			<a href="{{ route('prod.edit', $prodd->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  
		{{ $prodd->costo }}
		{{ $prodd->descripcion }}
		{{ $prodd->preciovta }}

	</p>
	<div class="col-sm-4">
		@include('produc.fragment.aside')
	</div>

@endsection