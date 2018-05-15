@extends('layouts.actividadeslay')

@section('content')
	<div class="row">
	    <div class="col-sm-8">
	    	<h2>
	    		{{ $act->actividadRealizada }}
	    	</h2>
			@include('client.fragment.error')
			{!! Form::model($act, ['route' => ['activities.update', $act->id], 'method'=>'PUT']) !!}

			    <div class="form-group">
               	    	<input type="button" class="btn btn-primary" id="activ" value="Editar">
                    	<button class="btn btn-primary pull-right" type="submint">Guardar</button>
                    	<a class="btn btn-default btn-danger btn-close" href="{{ route('finca.index') }}">Cancelar</a>
                </div>

				<div class="form-group row">
	                <label for="nomfinca" class="col-md-2 col-form-label">Finca a la cual pertenece</label>
	                <div class="col-sm-8">
	                    <select name="idFiinca" id="idFiinca"  class="form-control">
	                    	<option value="">Finca donde labora</option>
	                    	@foreach($fin as $finca)
	                    		<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
	                    	@endforeach
	                    </select>	
	                </div>														
                </div>
				
				<div class="form-group row">
                	<label for="NomPredio" class="col-md-2 col-form-label">Nombre del predio</label>
                    <div class="col-sm-8">
                		<input id="NomPredio" type="text" class="form-control" name="NomPredio" placeholder="Nombre del predio" value="{{ $act->NomPredio }}" required autofocus>
                        	@if ($errors->has('NomPredio'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('NomPredio') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="noLote" class="col-md-2 col-form-label">Numero de Lote</label>
                    <div class="col-sm-8">
                		<input id="noLote" type="number" class="form-control" name="noLote" placeholder="Numero de lote" value="{{ $act->noLote }}" required autofocus>
                        	@if ($errors->has('noLote'))
                            	<span class="help-block">
                	<strong>{{ $errors->first('noLote') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="actividadRealizada" class="col-md-2 col-form-label">Actividades realizadas</label>
                    <div class="col-sm-8">
                		<input id="actividadRealizada" type="text" class="form-control" name="actividadRealizada"  placeholder="Actividades realizadas" value="{{ $act->actividadRealizada}}" required autofocus>
                        	@if ($errors->has('actividadRealizada'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('actividadRealizada') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="empleadosInvolucrados" class="col-md-2 col-form-label">Empleados Involucrados</label>
                    <div class="col-sm-8">
                		<input id="empleadosInvolucrados" type="text" class="form-control" name="empleadosInvolucrados"  placeholder="Empleados Involucrados" value="{{ $act->empleadosInvolucrados }}" required autofocus>
                        	@if ($errors->has('empleadosInvolucrados'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('empleadosInvolucrados') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="tiempoEmpleado" class="col-md-2 col-form-label">Horas Empleadas</label>
                    <div class="col-sm-8">
                		<input id="tiempoEmpleado" type="text" class="form-control" name="tiempoEmpleado"  placeholder="Horas Empleadas" value="{{ $act->tiempoEmpleado }}" required autofocus>
                        	@if ($errors->has('discapacidades'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('tiempoEmpleado') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                <div class="form-group row">
                	<label for="vehInvolucrados" class="col-md-2 col-form-label">Vehiculos Involucrados</label>
                    <div class="col-sm-8">
                		<input id="vehInvolucrados" type="text" class="form-control" name="vehInvolucrados"  placeholder="Vehiculos Involucrados" value="{{ $act->vehInvolucrados }}" required autofocus>
                        	@if ($errors->has('vehInvolucrados'))
                            	<span class="help-block">
                                	<strong>{{ $errors->first('vehInvolucrados') }}</strong>
                            	</span>
                        	@endif
                   </div>
                </div>

                {!! Form::close() !!}
                <div class="col-sm-4">
					@include('activ.fragment.aside')
				</div>
		</div>
	</div>
<script>
$("#idFiinca").attr("disabled", "disabled");
$("#NomPredio").attr("disabled", "disabled");
$("#noLote").attr("disabled", "disabled");
$("#actividadRealizada").attr("disabled", "disabled");
$("#empleadosInvolucrados").attr("disabled", "disabled");
$("#tiempoEmpleado").attr("disabled", "disabled");
$("#vehInvolucrados").attr("disabled", "disabled");

$(document).ready(inicializarElementos);
function inicializarElementos()
{
	$("#activ").click(clickElemento);
}
function clickElemento()
{
	$("#idFiinca").removeAttr("disabled");
	$("#NomPredio").removeAttr("disabled");
	$("#noLote").removeAttr("disabled");
	$("#actividadRealizada").removeAttr("disabled");
	$("#empleadosInvolucrados").removeAttr("disabled");
	$("#tiempoEmpleado").removeAttr("disabled");
	$("#vehInvolucrados").removeAttr("disabled");
}
</script>	
	    
@endsection