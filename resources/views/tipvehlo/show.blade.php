@extends('layouts.tplay')
@section('content')
	<div class="row">
	    <div class="col-sm-8">
		<h2>
			Detalles
		</h2>
		@include('tipvehlo.fragment.error')
		{!! Form::model($tp, ['route' => ['tipveh.update', $tp->id], 'method'=>'PUT']) !!}
			<div class="form-group">
               	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                <button class="btn btn-primary pull-right" type="submint">Guardar</button>
                <a class="btn btn-default btn-danger btn-close" href="{{ route('tipveh.index') }}">Cancelar</a>
            </div>

            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Tipo del vehiculo</label>
                   <div class="col-sm-8">
                	<input id="nomTipo" type="text" class="form-control" name="nomTipo" placeholder="Nombre del tipo" value="{{ $tp->nomTipo }}" required autofocus>
                       	@if ($errors->has('nomTipo'))
                           	<span class="help-block">
                				<strong>{{ $errors->first('nomTipo') }}</strong>
                           	</span>
                       	@endif
                   </div>
            </div>

		{!! Form::close() !!}
		<div class="col-sm-4">
			@include('tipvehlo.fragment.aside')
		</div>
		</div>
	</div>
<script>
$("#nomTipo").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#nomTipo").removeAttr("disabled");
</script>	
@endsection