@extends('layouts.provedorlay')

@section('content')
	<div class="row">
	    <div class="col-sm-8">
		<h2>
			{{ $prove->nomProv }}
		</h2>
		@include('proveedr.fragment.error')
		{!! Form::model($prove, ['route' => ['prov.update', $prove->id], 'method'=>'PUT']) !!}
			<div class="form-group">
               	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                <button class="btn btn-primary pull-right" type="submint">Guardar</button>
                <a class="btn btn-default btn-danger btn-close" href="{{ route('prov.index') }}">Cancelar</a>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">RFC</label>
                   <div class="col-sm-8">
                	<input id="RFCProv" type="text" class="form-control" name="RFCProv" placeholder="RFC" maxlenght="13" value="{{ $prove->RFCProv }}" required autofocus>
                       	@if ($errors->has('RFCProv'))
                           	<span class="help-block">
                				<strong>{{ $errors->first('RFCProv') }}</strong>
                           	</span>
                       	@endif
                   </div>
            </div>
            <div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="nomProv" type="text" class="form-control" name="nomProv" placeholder="Nombre del proveedor" value="{{ $prove->nomProv }}" required autofocus>
                        	@if ($errors->has('nomProv'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('nomProv') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
       		<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Domicilio</label>
                    <div class="col-sm-8">
                		<input id="domProv" type="text" class="form-control" name="domProv" placeholder="Domicilio del proveedor" value="{{ $prove->domProv }}" required autofocus>
                        	@if ($errors->has('domProv'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('domProv') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
        	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Telefono</label>
                    <div class="col-sm-8">
                		<input id="telProv" type="phone" class="form-control" name="telProv" placeholder="Telefono" value="{{ $prove->telProv }}" required autofocus>
                        	@if ($errors->has('telProv'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('telProv') }}</strong>
                            	</span>
                        	@endif
                   </div>
            </div>
        	<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Correo electronico</label>
                    <div class="col-sm-8">
                		<input id="emailProv" type="email" class="form-control" name="emailProv" placeholder="Correo electronico" value="{{ $prove->emailProv }}" required autofocus>
                        	@if ($errors->has('emailProv'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('emailProv') }}</strong>
                            	</span>
                        	@endif
                   </div>
            </div>
       		<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="empresaProv" type="text" class="form-control" name="empresaProv" placeholder="Nombre de la empresa" value="{{ $prove->empresaProv }}" required autofocus>
                        	@if ($errors->has('empresaProv'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('empresaProv') }}</strong>
                            	</span>
                        	@endif
                   </div>
            </div>    
			{!! Form::close() !!}
			<div class="col-sm-4">
			@include('proveedr.fragment.aside')
			</div>
		</div>
	</div>
<script>
$("#RFCProv").attr("disabled", "disabled");
$("#nomProv").attr("disabled", "disabled");
$("#domProv").attr("disabled", "disabled");
$("#telProv").attr("disabled", "disabled");
$("#emailProv").attr("disabled", "disabled");
$("#empresaProv").attr("disabled", "disabled");


$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#RFCProv").removeAttr("disabled");
	$("#nomProv").removeAttr("disabled");
	$("#domProv").removeAttr("disabled");
	$("#telProv").removeAttr("disabled");
	$("#emailProv").removeAttr("disabled");
	$("#empresaProv").removeAttr("disabled");
}
</script>
@endsection