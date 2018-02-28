
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

<div class="form-group">
	{!! Form::label('Marca','Nombre de la marca') !!}
	{!! Form::text('Marca', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Combustible','Tipo de combustible que usa') !!}
	{!! Form::text('Combustible', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('Rendimiento','Rendimiento') !!}
	{!! Form::text('Rendimiento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ModeloVeh','Modelo') !!}
	{!! Form::number('ModeloVeh', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('Adepreciacion','Depreciacion') !!}
	{!! Form::text('Adepreciacion', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('yearFabricacion','Año de Fabricacion') !!}
	{!! Form::number('yearFabricacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('ValorActVeh','Valor actual') !!}
	{!! Form::number('ValorActVeh', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('Placa','No. PLaca') !!}
	{!! Form::text('Placa', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>
