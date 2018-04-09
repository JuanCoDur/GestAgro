<div class="form-group">
	{!! Form::label('pozo','Nombre del pozo') !!}
	{!! Form::text('pozo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('medidor','Medidor') !!}
	{!! Form::text('medidor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ubicacionPzo','Ubicacion') !!}
	{!! Form::text('ubicacionPzo',null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('latitud','Latitud') !!}
	{!! Form::text('latitud', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('longitud','Longitud') !!}
	{!! Form::text('longitud', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('altitud','Altitud') !!}
	{!! Form::text('altitud', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>