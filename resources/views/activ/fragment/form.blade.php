<div class="form-group">
    <label for="nomfinca" class="col-md-2 col-form-label">Finca a la cual pertenece</label>
    
        <select name="idFiinca" id="idFiinca"  class="form-control">
        	<option value="">Finca donde labora</option>
        	@foreach($fin as $finca)
        		<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
        	@endforeach
        </select>	
													
</div>
<div class="form-group">
	{!! Form::label('NomPredio','Nombre del predio') !!}
	{!! Form::text('NomPredio', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('noLote','No. Lote') !!}
	{!! Form::number('noLote', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('actividadRealizada','Actividades Realizadas') !!}
	{!! Form::text('actividadRealizada', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('empleadosInvolucrados','Empleados Involucrados') !!}
	{!! Form::text('empleadosInvolucrados', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tiempoEmpleado','Horas Empleadas') !!}
	{!! Form::text('tiempoEmpleado', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('vehInvolucrados','Vehiculos Involucrados') !!}
	{!! Form::text('vehInvolucrados', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>