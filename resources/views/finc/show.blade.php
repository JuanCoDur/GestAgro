@extends('layouts.fincalay')

@section('content')
	<div class="col-sm-8">
		<h2> 
			{{ $finc->nomfinca }}
			<a href="{{ route('fincas.edit', $finc->id) }}" class="btn btn-default pull-right">Editar</a>
		</h2>
		<p>
			{{ $finc->domfinca }}
			{{ $finc->ciudad }}
			{{ $finc->estado }}

		</p>
		{!! $finc->telfinca !!}
	</div>
	<div class="col-sm-4">
		@include('finc.fragment.aside')
	</div>
@endsection