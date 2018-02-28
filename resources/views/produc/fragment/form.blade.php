<div class="form-group">
	<label for="">Clasificacion</label>

	<select name="idClasif" id="idClasif" class="form-control">
		<option value="">Elija una clasificacion</option>
		@foreach($class as $clasificasion)
			<option value="{{ $clasificasion['id'] }}" >{{ $clasificasion['nomClasif'] }}</option>
		@endforeach
	</select>
															
</div>

<div class="form-group">
	{!! Form::label('nomProducto','Nombre del producto') !!}
	{!! Form::text('nomProducto', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('descripcion','Descripcion breve') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('costo','Costo') !!}
	{!! Form::number('costo',null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('preciovta','Precio de venta') !!}
	{!! Form::number('preciovta', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>