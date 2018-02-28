<div class="form-group">
	{!! Form::label('nomfinca','Nombre de la finca') !!}
	{!! Form::text('nomfinca', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('domfinca','Domicilio de la finca') !!}
	{!! Form::text('domfinca', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telfinca','Telefono de la finca') !!}
	{!! Form::number('telfinca', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ciudad','Ciudad') !!}
	{!! Form::text('ciudad', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('estado','Estado') !!}
	{!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	<label for="">Usuario a quien pertenece</label>

	<select name="us_id" id="us_id" class="form-control">
		<option value="">Usuario</option>
		@foreach($us as $usu)
			<option value="{{ $usu['id'] }}" >{{ $usu['name'] }}</option>
		@endforeach
	</select>															
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>