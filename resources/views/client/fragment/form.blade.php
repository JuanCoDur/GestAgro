<div class="form-group">
	{!! Form::label('nomCte','Nombre completo') !!}
	{!! Form::text('nomCte', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('domCte','Domicilio') !!}
	{!! Form::text('domCte', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telCte','Numero de telefono') !!}
	{!! Form::number('telCte', null, ['class' => 'form-control','maxlength'=>'10']) !!}
</div>

<div class="form-group">
	{!! Form::label('emailCte','Correo electronico') !!}
	{!! Form::email('emailCte', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('RFCte','RFC') !!}
	{!! Form::text('RFCte', null, ['class' => 'form-control','maxlength'=>'13']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>