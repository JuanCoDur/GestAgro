
<div class="form-group">
	<label for="">Finca a la que pertenece</label>
	<select name="idFin" id="idFin" class="form-control">
		<option value="">Elija finca</option>
		@foreach($fin as $finca)
			<option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
		@endforeach
	</select>															
</div>
<div class="form-group">
	{!! Form::label('nombrePredio','Nombre del predio') !!}
	{!! Form::text('nombrePredio', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('numLote','Numero de lote') !!}
	{!! Form::number('numLote', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('superficie','Extencion de la superficie') !!}
	{!! Form::number('superficie', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('regimenHumedad','Regimen de humedad') !!}
	{!! Form::text('regimenHumedad', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('tipRiego','Tipo de riego') !!}
	{!! Form::text('tipRiego', null, ['class' => 'form-control']) !!}
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
	{!! Form::label('observaciones','Observaciones') !!}
	{!! Form::text('observaciones', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>