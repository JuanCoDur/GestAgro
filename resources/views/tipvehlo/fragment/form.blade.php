<div class="form-group">
	{!! Form::label('idmarc','Marca') !!}
	{!! Form::number('idmarc', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('nomTipo','Nombre de tipo') !!}
	{!! Form::text('nomTipo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>