
{{--<div class="form-group">--}}
    {{--<label for="">Tipo de maquiria</label>--}}
    {{--<select name="idtipov" id="idtipov" class="form-control">--}}
        {{--<option value="">Elija un tipo</option>--}}
        {{--@foreach($tipv as $tipo)--}}
            {{--<option value="{{ $tipo['id'] }}" >{{ $tipo['nomTipo'] }}</option>--}}
        {{--@endforeach--}}
    {{--</select>--}}
{{--</div>--}}

<div class="form-group">
    <label for="">Finca a la que pertenece</label>
    <select name="idFiinc" id="idFiinc" class="form-control">
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
    {!! Form::label('Combustible','Tipo de combustible que usa') !!}
    {!! Form::text('Combustible', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Rendimiento','Rendimiento') !!}
    {!! Form::text('Rendimiento', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('ModelMaq','Modelo') !!}
    {!! Form::number('ModeloMaq', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
    {!! Form::label('yearFabricacion','Año de Fabricacion') !!}
    {!! Form::number('yearFabricacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('Adepreciacion','Año de Depreciacion') !!}
    {!! Form::number('Adepreciacion', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('ValorActMaq','Valor actual') !!}
    {!! Form::number('ValorActMaq', null, ['class' => 'form-control','step'=>'any']) !!}
</div>

<div class="form-group">
    {!! Form::label('Unidad','Unidad') !!}
    {!! Form::text('Unidad', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('noSerieMotor','Numero de serie del motor') !!}
    {!! Form::text('noSerieMotor', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Agregar', ['class' => 'btn btn-primary']) !!}
</div>
