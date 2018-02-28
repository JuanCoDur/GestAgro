@extends('layouts.vehlay')

@section('content')

	<div class="col-sm-8">
		<h2>
			{{ $veh->idTipoV }}
			{{ $veh->idFinca }}
			{{ $veh->ModeloVeh }}		
			<a href="{{ route('vehic.edit', $veh->id) }}"class="btn btn-default pull-right">Editar</a>
		</h2>
	</div>
	<p>  
		{{ $veh->Marca }}
		{{ $veh->Combustible }}
		{{ $veh->Rendimiento }}

	</p>
	<div class="col-sm-4">
		@include('vehi.fragment.aside')
	</div>

@endsection