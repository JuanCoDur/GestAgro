@extends('layouts.prelay')

@section('content')
	<div class="row">
	    <div class="col-sm-8">
	
		<h2>
			{{ $pre->nombrePredio }}
		</h2>
		@include('pred.fragment.error')
		{!! Form::model($pre, ['route' => ['predio.update', $pre->id], 'method'=>'PUT']) !!}
			<div class="form-group">
               	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                <button class="btn btn-primary pull-right" type="submint">Guardar</button>
                <a class="btn btn-default btn-danger btn-close" href="{{ route('predio.index') }}">Cancelar</a>
            </div>
			<div class="form-group">
				<label for="">Finca a la que pertenece</label>
				<select name="idFin" id="idFin" class="form-control">
					<option value="">Elija finca</option>
		                @foreach($fin as $finca)
		  	            	<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
		                @endforeach
				</select>															
			</div>
			<div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Nombre del predio</label>
                   <div class="col-sm-8">
                	<input id="nombrePredio" type="text" class="form-control" name="nombrePredio" placeholder="Nombre del predio" value="{{ $pre->nombrePredio }}" required autofocus>
                       	@if ($errors->has('nombrePredio'))
                           	<span class="help-block">
                				<strong>{{ $errors->first('nombrePredio') }}</strong>
                           	</span>
                       	@endif
                   </div>
            </div>
        	<div class="form-group row">
               	<label for="" class="col-md-2 col-form-label">Número de lote</label>
                   <div class="col-sm-8">
                		<input id="numLote" type="number" step="any" class="form-control" name="numLote" placeholder="Número de lote" value="{{ $pre->numLote }}" required autofocus>
                        	@if ($errors->has('numLote'))
                            	<span class="help-block">
           					     	<strong>{{ $errors->first('numLote') }}</strong>
                            	</span>
                        	@endif
                   </div>
            </div>
        	<div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Superficie</label>
                <div class="col-sm-8">
                	<input id="superficie" type="number" step="any" class="form-control" name="superficie" placeholder="Superficie" value="{{ $pre->superficie }}" required autofocus>
                        @if ($errors->has('superficie'))
                           	<span class="help-block">
                				<strong>{{ $errors->first('superficie') }}</strong>
                           	</span>
                        @endif
                </div>
            </div>
        	<div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Regimen de humedad</label>
                <div class="col-sm-8">
             		<input id="regimenHumedad" type="text" step="any" class="form-control" name="regimenHumedad" placeholder="Regimen de humedad" value="{{ $pre->regimenHumedad }}" required autofocus>
                    	@if ($errors->has('regimenHumedad'))
                        	<span class="help-block">
             					<strong>{{ $errors->first('regimenHumedad') }}</strong>
                        	</span>
                    	@endif
                </div>
            </div>
       		<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Tipo de riego</label>
                    <div class="col-sm-8">
                		<input id="tipRiego" type="text" step="any" class="form-control" name="tipRiego" placeholder="Tipo de riego" value="{{ $pre->tipRiego }}" required autofocus>
                        	@if ($errors->has('tipRiego'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('tipRiego') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
        	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Latitud</label>
                    <div class="col-sm-8">
                		<input id="latitud" type="number" step="any" class="form-control" name="latitud" placeholder="Latitud" value="{{ $pre->latitud }}" required autofocus>
                        	@if ($errors->has('latitud'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('latitud') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
        	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Longitud</label>
                    <div class="col-sm-8">
                		<input id="longitud" type="number" step="any" class="form-control" name="longitud" placeholder="Longitud" value="{{ $pre->longitud }}" required autofocus>
                        	@if ($errors->has('longitud'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('longitud') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
        	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Altitud</label>
                    <div class="col-sm-8">
                		<input id="altitud" type="number" step="any"class="form-control" name="altitud" placeholder="Altitud" value="{{ $pre->altitud }}" required autofocus>
                        	@if ($errors->has('altitud'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('altitud') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Observaciones</label>
                <div class="col-sm-8">
               		<input id="observaciones" type="text"  step="any" class="form-control" name="observaciones" placeholder="Observaciones" value="{{ $pre->observaciones }}" required autofocus>
                        @if ($errors->has('observaciones'))
                           	<span class="help-block">
                				<strong>{{ $errors->first('observaciones') }}</strong>
                           	</span>
                        @endif
                </div>
            </div>    

		{!! Form::close() !!}
		<div class="col-sm-4">
			@include('pred.fragment.aside')
		</div>
		</div>
	</div>
<script>
$("#idFin").attr("disabled", "disabled");
$("#nombrePredio").attr("disabled", "disabled");
$("#numLote").attr("disabled", "disabled");
$("#superficie").attr("disabled", "disabled");
$("#regimenHumedad").attr("disabled", "disabled");
$("#tipRiego").attr("disabled", "disabled");
$("#latitud").attr("disabled", "disabled");
$("#longitud").attr("disabled", "disabled");
$("#altitud").attr("disabled", "disabled");
$("#observaciones").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#idFin").removeAttr("disabled");
	$("#nombrePredio").removeAttr("disabled");
	$("#numLote").removeAttr("disabled");
	$("#superficie").removeAttr("disabled");
	$("#regimenHumedad").removeAttr("disabled");
	$("#tipRiego").removeAttr("disabled");
	$("#latitud").removeAttr("disabled");
	$("#longitud").removeAttr("disabled");
	$("#altitud").removeAttr("disabled");
	$("#observaciones").removeAttr("disabled");
}

</script>	
@endsection