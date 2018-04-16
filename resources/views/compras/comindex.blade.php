@extends('layouts.principal')
@section('content')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Lista de ingresos<a href="ingresos/create"><button class="btn btn-success">Nuevo</button></a></h3>
		@include('compras.ingreso.search')
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-resposive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>FOLIOCOMPRA</th>
					<th>IDFINCA</th>
					<th>IDPROVEEDOR</th>
					<th>FECCOMPRA</th>
					<th>TOTALCOMPRA</th>
				</thead>
			</table>
		</div>
	</div>
</div>
@endsection