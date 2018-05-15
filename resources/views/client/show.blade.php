@extends('layouts.claslay')

@section('content')
<div class="row">
	    <div class="col-sm-8">
		    <h2>
		    	{{ $cli->nomCte }}
		    </h2>
		    @include('client.fragment.error')
			{!! Form::model($cli, ['route' => ['clients.update', $cli->id], 'method'=>'PUT']) !!}
				<div class="form-group">
               	    	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                    	<button class="btn btn-primary pull-right" type="submint">Guardar</button>
                    	<a class="btn btn-default btn-danger btn-close" href="{{ route('activities.index') }}">Cancelar</a>
                </div>
                <div class="form-group row">
                	<label for="nomCte" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="nomCte" type="text" class="form-control" name="nomCte" placeholder="Nombre" value="{{ $cli->nomCte }}" required autofocus>
                        	@if ($errors->has('nomCte'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('nomCte') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="domCte" class="col-md-2 col-form-label">Domicilio</label>
                    <div class="col-sm-8">
                		<input id="domCte" type="text" class="form-control" name="domCte" placeholder="Domicilio" value="{{ $cli->domCte }}" required autofocus>
                        	@if ($errors->has('domCte'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('domCte') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="telCte" class="col-md-2 col-form-label">Telefono</label>
                    <div class="col-sm-8">
                		<input id="telCte" type="phone" class="form-control" name="telCte" placeholder="Telefono" value="{{ $cli->telCte }}" required autofocus>
                        	@if ($errors->has('telCte'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('telCte') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="emailCte" class="col-md-2 col-form-label">Correo electronico</label>
                    <div class="col-sm-8">
                		<input id="emailCte" type="email" class="form-control" name="emailCte" placeholder="Correo electronico" value="{{ $cli->emailCte }}" required autofocus>
                        	@if ($errors->has('telCte'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('emailCte') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
                <div class="form-group row">
                	<label for="RFCte" class="col-md-2 col-form-label">RFC</label>
                    <div class="col-sm-8">
                		<input id="RFCte" type="text" class="form-control" name="RFCte" placeholder="RFC" value="{{ $cli->RFCte }}" maxlength="13" required autofocus>
                        	@if ($errors->has('RFCte'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('RFCte') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
				{!! Form::close() !!}
                <div class="col-sm-4">
					@include('client.fragment.aside')
				</div>
		</div>
	</div>
<script>
$("#nomCte").attr("disabled", "disabled");
$("#domCte").attr("disabled", "disabled");
$("#telCte").attr("disabled", "disabled");
$("#emailCte").attr("disabled", "disabled");
$("#RFCte").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#nomCte").removeAttr("disabled");
	$("#domCte").removeAttr("disabled");
	$("#telCte").removeAttr("disabled");
	$("#emailCte").removeAttr("disabled");
	$("#RFCte").removeAttr("disabled");
}
</script>	
	    
@endsection