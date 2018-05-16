@extends('layouts.prolay')

@section('content')
<div class="row">
	<div class="col-sm-8">
		<h2>
			{{ $prodd->nomProducto }}
		</h2>
		@include('produc.fragment.error')
		{!! Form::model($prodd, ['route' => ['prod.update', $prodd->id], 'method'=>'PUT']) !!}

            <div class="form-group">
                <input type="button" class="btn btn-primary" id="activ" value="Editar">
                <button class="btn btn-primary pull-right" type="submint">Guardar</button>
                <a class="btn btn-default btn-danger btn-close" href="{{ route('prod.index') }}">Cancelar</a>
            </div>
			<div class="form-group">
				<label for="">Clasificacion</label>
				<select name="idClasif" id="idClasif" class="form-control">
		                <option value="">Elija una clasificacion</option>
		                @foreach($class as $clasificasion)
		                	<option value="{{ $clasificasion['id'] }}" >{{ $clasificasion['nomClasif'] }}</option>
		                @endforeach
				</select>									
			</div>
			<div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Nombre</label>
                    <div class="col-sm-8">
                		<input id="nomProducto" type="text" class="form-control" name="nomProducto" placeholder="Nombre del producto" value="{{ $prodd->nomProducto }}" required autofocus>
                        	@if ($errors->has('nomProducto'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('nomProducto') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
            <div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Descripcion breve</label>
                    <div class="col-sm-8">
                		<input id="descripcion" type="text" class="form-control" name="descripcion" placeholder="Descripcion breve" value="{{ $prodd->descripcion }}" required autofocus>
                        	@if ($errors->has('descripcion'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('descripcion') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
            <div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Costo</label>
                    <div class="col-sm-8">
                		<input id="costo" type="number" class="form-control" name="costo" placeholder="Costo" value="{{ $prodd->costo }}" required autofocus>
                        	@if ($errors->has('costo'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('costo') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>
            <div class="form-group row">
                	<label for="" class="col-md-2 col-form-label">Precio de venta</label>
                    <div class="col-sm-8">
                		<input id="preciovta" type="number" class="form-control" name="preciovta" placeholder="Precio de venta" value="{{ $prodd->preciovta }}" required autofocus>
                        	@if ($errors->has('preciovta'))
                            	<span class="help-block">
                					<strong>{{ $errors->first('preciovta') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>    
		{!! Form::close() !!}
	

	<div class="col-sm-4">
		@include('produc.fragment.aside')
	</div>
	</div>
</div>
<script>
$("#idClasif").attr("disabled", "disabled");
$("#nomProducto").attr("disabled", "disabled");
$("#descripcion").attr("disabled", "disabled");
$("#costo").attr("disabled", "disabled");
$("#preciovta").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
    $("#activ").click(clickElemento);
}
function clickElemento()
{
    $("#idClasif").removeAttr("disabled");
    $("#nomProducto").removeAttr("disabled");
    $("#descripcion").removeAttr("disabled");
    $("#costo").removeAttr("disabled");
    $("#preciovta").removeAttr("disabled");
}

</script>   
@endsection