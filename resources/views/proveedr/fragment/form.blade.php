
<div class="form-group">
	{!! Form::label('RFCProv','RFC') !!}
	{!! Form::text('RFCProv', null, ['class' => 'form-control','maxlength'=>'13']) !!}
</div>

<div class="form-group">
	{!! Form::label('nomProv','Nombre') !!}
	{!! Form::text('nomProv', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('domProv','Domicilio') !!}
	{!! Form::text('domProv',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telProv','Numero de telefono') !!}
	{!! Form::number('telProv', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('emailProv','Correo electronico') !!}
	{!! Form::email('emailProv', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('empresaProv','Nombre de la empresa') !!}
	{!! Form::text('empresaProv', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>