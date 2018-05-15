@extends('layouts.pozlay')

@section('content')

	<div class="row">
	    <div class="col-sm-8">
		<h2>
			{{ $poz->pozo }}
		</h2>
		@include('poozos.fragment.error')
		{!! Form::model($poz, ['route' => ['pozo.update', $poz->id], 'method'=>'PUT']) !!}

			<div class="form-group">
			  	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                <button class="btn btn-primary pull-right" type="submint">Guardar</button>
               	<a class="btn btn-default btn-danger btn-close" href="{{ route('pozo.index') }}">Cancelar</a>
            </div>
            <div class="form-group row">
                  <label for="nomfinca" class="col-md-2 col-form-label">Finca a la cual pertenece</label>
                  <div class="col-sm-8">
                      <select name="idFiin" id="idFiin"  class="form-control">
                        <option value="">Finca donde labora</option>
                        @foreach($fin as $finca)
                          <option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
                        @endforeach
                      </select> 
                  </div>                            
                </div>
            <div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="pozo" type="text" class="form-control" name="pozo"  placeholder="Nombre del pozo" value="{{ $poz->pozo}}" required autofocus>
                        	@if ($errors->has('pozo'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('pozo') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
			     <div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Medidor</label>
                    <div class="col-sm-8">
                		<input id="medidor" type="text" class="form-control" name="medidor"  placeholder="Medidor" value="{{ $poz->medidor}}" required autofocus>
                        	@if ($errors->has('medidor'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('medidor') }}</strong>
                            	</span>
                        	@endif
                   </div>
           	</div>
        	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Ubicación del pozo </label>
                    <div class="col-sm-8">
                		<input id="ubicacionPzo" type="number" class="form-control" name="ubicacionPzo" step="any"  placeholder="Ubicación del pozo " value="{{ $poz->ubicacionPzo}}" required autofocus>
                        	@if ($errors->has('ubicacionPzo'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('ubicacionPzo') }}</strong>
                            	</span>
                        	@endif
                   </div>
           	</div>
           	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Latitud</label>
                    <div class="col-sm-8">
                		<input id="latitud" type="number" class="form-control" name="latitud" step="any"  placeholder="Latitud" value="{{ $poz->latitud}}" required autofocus>
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
                		<input id="longitud" type="number" class="form-control" name="longitud" step="any"  placeholder="Longitud" value="{{ $poz->longitud}}" required autofocus>
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
                		<input id="altitud" type="number" class="form-control" name="altitud" step="any"  placeholder="Altitud" value="{{ $poz->altitud}}" required autofocus>
                        	@if ($errors->has('altitud'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('altitud') }}</strong>
                            	</span>
                        	@endif
                   </div>
           	</div>

		{!! Form::close() !!}
		<div class="col-sm-4">
			@include('poozos.fragment.aside')
		</div>
		</div>
	</div>
<script>
$("#idFiin").attr("disabled", "disabled");
$("#pozo").attr("disabled", "disabled");
$("#medidor").attr("disabled", "disabled");
$("#ubicacionPzo").attr("disabled", "disabled");
$("#latitud").attr("disabled", "disabled");
$("#longitud").attr("disabled", "disabled");
$("#altitud").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
  $("#idFiin").removeAttr("disabled");
	$("#pozo").removeAttr("disabled");
	$("#medidor").removeAttr("disabled");
	$("#ubicacionPzo").removeAttr("disabled");
	$("#latitud").removeAttr("disabled");
	$("#longitud").removeAttr("disabled");
	$("#altitud").removeAttr("disabled");
}
</script>

@endsection