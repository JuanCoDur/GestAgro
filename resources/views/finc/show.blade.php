@extends('layouts.fincalay')

@section('content')
	<div class="row">
	    <div class="col-sm-8">
		    <h2>
		    	{{ $finc->nomfinca }}
		    </h2>
		    @include('finc.fragment.error')
			{!! Form::model($finc, ['route' => ['finca.update', $finc->id], 'method' => 'PUT']) !!}
				<div class="form-group">
               	    	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                    	<button class="btn btn-primary pull-right" type="submint">Guardar</button>
                    	<a class="btn btn-default btn-danger btn-close" href="{{ route('finca.index') }}">Cancelar</a>
                </div>
                <div class="form-group row">
                	<label for="nomfinca" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="nomfinca" type="text" class="form-control" name="nomfinca" placeholder="Nombre de la finca" value="{{ $finc->nomfinca }}" required autofocus>
                        	@if ($errors->has('nomfinca'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('nomfinca') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="domfinca" class="col-md-2 col-form-label">Domicilio</label>
                    <div class="col-sm-8">
                		<input id="domfinca" type="phone" class="form-control" name="domfinca" placeholder="Domicilio de la finca" value="{{ $finc->domfinca }}" required autofocus>
                        	@if ($errors->has('domfinca'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('domfinca') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="telfinca" class="col-md-2 col-form-label">Telefono</label>
                    <div class="col-sm-8">
                		<input id="telfinca" type="phone" class="form-control" name="telfinca" placeholder="Telefono de la finca" value="{{ $finc->telfinca }}" required autofocus>
                        	@if ($errors->has('telfinca'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('telfinca') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="ciudad" class="col-md-2 col-form-label">Ciudad</label>
                    <div class="col-sm-8">
                		<input id="ciudad" type="text" class="form-control" name="ciudad" placeholder="Ciudad" value="{{ $finc->ciudad }}" maxlength="13" required autofocus>
                        	@if ($errors->has('ciudad'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('ciudad') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="estado" class="col-md-2 col-form-label">Estado</label>
                    <div class="col-sm-8">
                		<input id="estado" type="text" class="form-control" name="estado" placeholder="Estado" value="{{ $finc->estado }}" maxlength="13" required autofocus>
                        	@if ($errors->has('estado'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('estado') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group">
	                <label for="">Usuario a quien pertenece</label>

	                <select name="us_id" id="us_id" class="form-control">
	                	<option value="">Usuario</option>
	                	@foreach($us as $usu)
	                		<option value="{{ $usu['id'] }}" >{{ $usu['name'] }}</option>
	                	@endforeach
	                </select>															
				</div>
				{!! Form::close() !!}
                
		</div>
	</div>
<script>
$("#nomfinca").attr("disabled", "disabled");
$("#domfinca").attr("disabled", "disabled");
$("#telfinca").attr("disabled", "disabled");
$("#ciudad").attr("disabled", "disabled");
$("#estado").attr("disabled", "disabled");
//$("#us_id").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#nomfinca").removeAttr("disabled");
	$("#domfinca").removeAttr("disabled");
	$("#telfinca").removeAttr("disabled");
	$("#ciudad").removeAttr("disabled");
	$("#estado").removeAttr("disabled");
	//$("#us_id").removeAttr("disabled");
}
</script>	
	    
@endsection