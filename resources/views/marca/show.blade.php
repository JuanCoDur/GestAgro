@extends('layouts.marcalay')

@section('content')
	<div class="row">
	    <div class="col-sm-8">
		@include('marca.fragment.error')
		{!! Form::model($marc, ['route' => ['marca.update', $marc->id], 'method'=>'PUT']) !!}
		 	<div class="form-group">
               	<input type="button" class="btn btn-primary" id="activ" value="Editar">
               	<button class="btn btn-primary pull-right" type="submint">Guardar</button>
               	<a class="btn btn-default btn-danger btn-close" href="{{ route('marca.index') }}">Cancelar</a>
        	</div>
        	<div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                	<input id="nomMarca" type="text" class="form-control" name="nomMarca" placeholder="Nombre de la marca" value="{{ $marc->nomMarca }}" required autofocus>
                       	@if ($errors->has('nomMarca'))
                           	<span class="help-block">
                				<strong>{{ $errors->first('nomMarca') }}</strong>
                           	</span>
                       	@endif
                	</div>
            </div>
		</div>
    {!! Form::close() !!}
		<div class="col-sm-4">
			@include('marca.fragment.aside')
		</div>
	</div>
<script>
$("#nomMarca").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#nomMarca").removeAttr("disabled");

}
</script>	
	    
@endsection

