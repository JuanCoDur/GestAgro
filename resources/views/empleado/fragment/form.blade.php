
<div class="form-group">
	<label for="">Finca a la cual pertenece</label>
	<select name="fin_id" id="fin_id" class="form-control">
		<option value="">Finca donde labora</option>
		@foreach($fin as $finca)
			<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
		@endforeach
	</select>															
</div>

<div class="form-group">
	{!! Form::label('nomemp','Nombre del empleado') !!}
	{!! Form::text('nomemp', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('edademp','Edad del empleado') !!}
	{!! Form::number('edademp', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('edocivil','Estado civil') !!}
	{!! Form::text('edocivil', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('depmenor','Dependientes menores') !!}
	{!! Form::number('depmenor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('depmayor','Dependientes mayores') !!}
	{!! Form::number('depmayor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('discapacidades','Discapacidades') !!}
	{!! Form::text('discapacidades', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('domemp','Domicilio del empleado') !!}
	{!! Form::text('domemp', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('telcasa','Telefono de casa') !!}
	{!! Form::number('telcasa', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('celemp','Numero de telefono celular ') !!}
	{!! Form::number('celemp', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('email','Correo electronico') !!}
	{!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('preparacion','Nivel academico') !!}
	{!! Form::text('preparacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('sueldonto','Sueldo neto') !!}
	{!! Form::text('sueldonto', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('cargo','Puesto del empleado') !!}
	{!! Form::text('cargo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('jefedirecto','Jefe directo del empleado') !!}
	{!! Form::text('jefedirecto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('subordinados','Empleados a cargo') !!}
	{!! Form::text('subordinados', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>