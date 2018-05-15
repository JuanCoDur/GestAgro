<div class="form-group">
    <label for="">Finca a la que pertenece</label>
    <select name="idFiin" id="idFiin" class="form-control">
        <option value="">Elija finca</option>
        @foreach($fin as $finca)
            <option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
        @endforeach
    </select>
</div>
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
	{!! Form::number('ubicacionPzo',null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('latitud','Latitud') !!}
	{!! Form::number('latitud', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('longitud','Longitud') !!}
	{!! Form::number('longitud', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::label('altitud','Altitud') !!}
	{!! Form::number('altitud', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
	{!! Form::submit('ENVIAR', ['class' => 'btn btn-primary']) !!}
</div>