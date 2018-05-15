@extends('layouts.vehlay')

@section('content')
	<div class="row">
	    <div class="col-sm-8">
		<h2>
			{{ $veh->ModeloVeh }}		
		</h2>
		@include('vehi.fragment.error')
		{!! Form::model($veh, ['route' => ['vehic.update', $veh->id], 'method'=>'PUT']) !!}
		<div class="form-group">
            <input type="button" class="btn btn-primary" id="activ" value="Editar">
            <button class="btn btn-primary pull-right" type="submint">Guardar</button>
            <a class="btn btn-default btn-danger btn-close" href="{{ route('vehic.index') }}">Cancelar</a>
        </div>
        <div class="form-group">
			<label for="">Tipo de vehiculo</label>
			<select name="idTipoV" id="idTipoV" class="form-control">
				<option value="">Elija un tipo</option>
				@foreach($tipv as $tipo)
					<option value="{{ $tipo['id'] }}" >{{ $tipo['nomTipo'] }}</option>
				@endforeach
			</select>														
		</div>
		<div class="form-group">
			<label for="">Finca a la que prtenece</label>
			<select name="idFinca" id="idFinca" class="form-control">
				<option value="">Elija finca</option>
				@foreach($fin as $finca)
					<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
				@endforeach
			</select>														
		</div>
		<div class="form-group">
			<label for="">Marca</label>
			<select name="idmarc" id="idmarc" class="form-control">
				<option value="">Elija marca</option>
				@foreach($marc as $marca)
					<option value="{{ $marca['id'] }}" >{{ $marca['nomMarca'] }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group row">
           	<label for="" class="col-md-2 col-form-label">Combustible</label>
            <div class="col-sm-8">
                <input id="Combustible" type="text" class="form-control" name="Combustible" maxlenght="8" placeholder="Combustible" value="{{ $veh->Combustible }}" required autofocus>
                    @if ($errors->has('Combustible'))
						<span class="help-block">
                            <strong>{{ $errors->first('Combustible') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
   		<div class="form-group row">
           	<label for="" class="col-md-2 col-form-label">Rendimiento</label>
            <div class="col-sm-8">
                <input id="Rendimiento" type="text" class="form-control" name="Rendimiento"  placeholder="Rendimiento" value="{{ $veh->Rendimiento }}" required autofocus>
                    @if ($errors->has('Rendimiento'))
						<span class="help-block">
                            <strong>{{ $errors->first('Rendimiento') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
		<div class="form-group row">
           	<label for="" class="col-md-2 col-form-label">Modelo</label>
            <div class="col-sm-8">
                <input id="ModeloVeh" type="text" class="form-control" name="ModeloVeh"  placeholder="Modelo" value="{{ $veh->ModeloVeh }}" required autofocus>
                    @if ($errors->has('ModeloVeh'))
						<span class="help-block">
                            <strong>{{ $errors->first('ModeloVeh') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
    	<div class="form-group row">
           	<label for="" class="col-md-2 col-form-label">Año de depreciación</label>
            <div class="col-sm-8">
                <input id="Adepreciacion" type="number" class="form-control" name="Adepreciacion"  placeholder="Año de depreciación" value="{{ $veh->Adepreciacion }}" required autofocus>
                    @if ($errors->has('Adepreciacion'))
						<span class="help-block">
                            <strong>{{ $errors->first('Adepreciacion') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
  		<div class="form-group row">
           	<label for="" class="col-md-2 col-form-label">Año de fabricación</label>
            <div class="col-sm-8">
                <input id="yearFabricacion" type="number" class="form-control" name="yearFabricacion"  placeholder="Año de fabricación" value="{{ $veh->yearFabricacion }}" required autofocus>
                    @if ($errors->has('yearFabricacion'))
						<span class="help-block">
                            <strong>{{ $errors->first('yearFabricacion') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
    	<div class="form-group row">
           	<label for="" class="col-md-2 col-form-label">Valor actual</label>
            <div class="col-sm-8">
                <input id="ValorActVeh" type="number" class="form-control" name="ValorActVeh"  placeholder="Valor actual del vehiculo" value="{{ $veh->ValorActVeh }}" required autofocus>
                    @if ($errors->has('ValorActVeh'))
						<span class="help-block">
                            <strong>{{ $errors->first('ValorActVeh') }}</strong>
                        </span>
                    @endif
            </div>
        </div>
    	<div class="form-group row">
           	<label for="vehInvolucrados" class="col-md-2 col-form-label">Placa</label>
            <div class="col-sm-8">
                <input id="Placa" type="text" class="form-control" name="Placa"  placeholder="Placa" value="{{ $veh->Placa }}" required autofocus>
                    @if ($errors->has('Placa'))
						<span class="help-block">
                            <strong>{{ $errors->first('Placa') }}</strong>
                        </span>
                    @endif
            </div>
        </div>	
		{!! Form::close() !!}
		<div class="col-sm-4">
			@include('vehi.fragment.aside')
		</div>
		</div>
	</div>
<script>
$("#idTipoV").attr("disabled", "disabled");
$("#idFinca").attr("disabled", "disabled");
$("#idmarc").attr("disabled", "disabled");
$("#Combustible").attr("disabled", "disabled");
$("#Rendimiento").attr("disabled", "disabled");
$("#ModeloVeh").attr("disabled", "disabled");
$("#Adepreciacion").attr("disabled", "disabled");
$("#yearFabricacion").attr("disabled", "disabled");
$("#ValorActVeh").attr("disabled", "disabled");
$("#Placa").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#idTipoV").removeAttr("disabled");
	$("#idFinca").removeAttr("disabled");
	$("#idmarc").removeAttr("disabled");
	$("#Combustible").removeAttr("disabled");
	$("#Rendimiento").removeAttr("disabled");
	$("#ModeloVeh").removeAttr("disabled");
	$("#Adepreciacion").removeAttr("disabled");
	$("#yearFabricacion").removeAttr("disabled");
	$("#ValorActVeh").removeAttr("disabled");
	$("#Placa").removeAttr("disabled");
}
</script>	
@endsection