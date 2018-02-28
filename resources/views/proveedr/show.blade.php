@extends('layouts.provedorlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $prove->nomProv }}
			<a href="{{ route('prov.edit', $prove->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  
		{{ $prove->domProv }}, 
		{{ $prove->emailProv }}, 
		{{ $prove->telProv }}, 
		{{ $prove->empresaProv }}

	</p>
	<div class="col-sm-4">
		@include('proveedr.fragment.aside')
	</div>

@endsection