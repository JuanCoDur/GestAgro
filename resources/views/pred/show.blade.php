@extends('layouts.prelay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $pre->nombrePredio }}
			<a href="{{ route('predio.edit', $pre->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>
		{{ $pre->superficie }}
		{{ $pre->observaciones }}
		
	</p>
	<div class="col-sm-4">
		@include('pred.fragment.aside')
	</div>

@endsection