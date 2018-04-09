<div class="form-group">
	{!! Form::label('idFiinca','Finca a la que pertenece') !!}
	{!! Form::number('idFiinca', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('NomPredio','Nombre del predio') !!}
	{!! Form::text('NomPRedio', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('noLote','No. Lote') !!}
	{!! Form::number('noLote', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('actividadesRealizadas','Actividades Realizadas') !!}
	{!! Form::text('actividadesRealizadas', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('empleadosInvolucrados','Empleados Involucrados') !!}
	{!! Form::text('empleadosInvolucrados', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('tiempoEmpleado','Horas Empleadas') !!}
	{!! Form::text('tiempoEMpleado', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('vehInvolucrados','Vehiculos Involucrados') !!}
	{!! Form::text('vehInvolucrados', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>