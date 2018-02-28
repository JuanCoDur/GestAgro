@extends('layouts.claslay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $cli->nomCte }}
			<a href="{{ route('clients.edit', $cli->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>
		{{ $cli->domCte }}
		{{ $cli->emailCte }}
		{{ $cli->telCte }}
	</p>
	<div class="col-sm-4">
		@include('client.fragment.aside')
	</div>

@endsection