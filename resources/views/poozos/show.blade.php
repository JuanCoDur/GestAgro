@extends('layouts.pozlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $poz->pozo }}
			<a href="{{ route('pozo.edit', $poz->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>
		{{ $poz->medidor }}
		{{ $poz->ubicacionPzo }}
		
	</p>
	<div class="col-sm-4">
		@include('poozos.fragment.aside')
	</div>

@endsection