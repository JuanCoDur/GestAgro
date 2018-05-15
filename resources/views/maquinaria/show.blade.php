@extends('layouts.maqlay')

@section('content')
   <div class="row">
        <div class="col-sm-8">
            <h2></h2>
            @include('maquinaria.fragment.error')
            {!! Form::model($maq, ['route' => ['maqui.update', $maq->id], 'method'=>'PUT']) !!}
            <div class="form-group">
                <input type="button" class="btn btn-primary" id="activ" value="Editar">
                <button class="btn btn-primary pull-right" type="submint">Guardar</button>
                <a class="btn btn-default btn-danger btn-close" href="{{ route('maqui.index') }}">Cancelar</a>
            </div>

            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Finca</label>
                <div class="col-sm-8">
                    <select name="idFiinc" id="idFiinc"  class="form-control">
                        <option value="">Finca donde labora</option>
                        @foreach($fin as $finca)
                            <option value="{{ $finca['id'] }}" >{{ $finca['nomfinca'] }}</option>
                        @endforeach
                    </select>   
                </div>                                                      
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Marca</label>
                <div class="col-sm-8">
                    <select name="idmarc" id="idmarc"  class="form-control">
                        <option value="">Finca donde labora</option>
                        @foreach($marc as $marca)
                            <option value="{{ $marca['id'] }}" >{{ $marca['nomMarca'] }}</option>
                        @endforeach
                    </select>   
                </div>                                                      
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Combustible</label>
                <div class="col-sm-8">
                    <input id="Combustible" type="text" class="form-control" name="Combustible" maxlength="8" placeholder="Combustible que utiliza" value="{{ $maq->Combustible }}" required autofocus>
                        @if ($errors->has('Combustible'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Combustible') }}</strong>
                            </span>
                       @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Rendimiento</label>
                <div class="col-sm-8">
                    <input id="Rendimiento" type="text" class="form-control" name="Rendimiento" placeholder="Rendimiento" value="{{ $maq->Rendimiento }}" required autofocus>
                        @if ($errors->has('Rendimiento'))
                            <span class="help-block">
                                <strong>{{ $errors->first('Rendimiento') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="NomPredio" class="col-md-2 col-form-label">Modelo</label>
                <div class="col-sm-8">
                    <input id="ModeloMaq" type="text" class="form-control" name="ModeloMaq" placeholder="Modelo" value="{{ $maq->ModeloMaq }}" required autofocus>
                        @if ($errors->has('ModeloMaq'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ModeloMaq') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Año de fabricación</label>
                <div class="col-sm-8">
                    <input id="yearFabricacion" type="text" class="form-control" name="yearFabricacion" placeholder="Nombre del predio" value="{{ $maq->yearFabricacion }}" required autofocus>
                        @if ($errors->has('yearFabricacion'))
                            <span class="help-block">
                <strong>{{ $errors->first('yearFabricacion') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Año de depreciación</label>
                <div class="col-sm-8">
                    <input id="Adepreciacion" type="text" class="form-control" name="Adepreciacion" placeholder="Año de depreciación" value="{{ $maq->Adepreciacion }}" required autofocus>
                        @if ($errors->has('Adepreciacion'))
                            <span class="help-block">
                <strong>{{ $errors->first('Adepreciacion') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Valor actual</label>
                <div class="col-sm-8">
                    <input id="ValorActMaq" type="text" class="form-control" name="ValorActMaq" placeholder="Valor actual" value="{{ $maq->ValorActMaq }}" required autofocus>
                        @if ($errors->has('ValorActMaq'))
                            <span class="help-block">
                <strong>{{ $errors->first('ValorActMaq') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Unidad</label>
                <div class="col-sm-8">
                    <input id="Unidad" type="text" class="form-control" name="Unidad" placeholder="Unidad" value="{{ $maq->Unidad }}" required autofocus>
                        @if ($errors->has('Unidad'))
                            <span class="help-block">
                <strong>{{ $errors->first('Unidad') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-md-2 col-form-label">Número de servicio</label>
                <div class="col-sm-8">
                    <input id="noSerieMotor" type="text" class="form-control" name="noSerieMotor" placeholder="Número de servicio" value="{{ $maq->noSerieMotor }}" required autofocus>
                        @if ($errors->has('noSerieMotor'))
                            <span class="help-block">
                <strong>{{ $errors->first('noSerieMotor') }}</strong>
                            </span>
                        @endif
               </div>
            </div>
            {!! Form::close() !!}
            <div class="col-sm-4">
                @include('maquinaria.fragment.aside')
            </div>
        </div>
    </div>
<script>
$("#idFiinc").attr("disabled", "disabled");
$("#idmarc").attr("disabled", "disabled");
$("#Combustible").attr("disabled", "disabled");
$("#Rendimiento").attr("disabled", "disabled");
$("#ModeloMaq").attr("disabled", "disabled");
$("#yearFabricacion").attr("disabled", "disabled");
$("#Adepreciacion").attr("disabled", "disabled");
$("#ValorActMaq").attr("disabled", "disabled");
$("#Unidad").attr("disabled", "disabled");
$("#noSerieMotor").attr("disabled", "disabled");


$(document).ready(inicializarElementos);
function inicializarElementos()
{
    $("#activ").click(clickElemento);
}
function clickElemento()
{
    $("#idFiinc").removeAttr("disabled");
    $("#idmarc").removeAttr("disabled");
    $("#Combustible").removeAttr("disabled");
    $("#Rendimiento").removeAttr("disabled");
    $("#ModeloMaq").removeAttr("disabled");
    $("#yearFabricacion").removeAttr("disabled");
    $("#Adepreciacion").removeAttr("disabled");
    $("#ValorActMaq").removeAttr("disabled");
    $("#Unidad").removeAttr("disabled");
    $("#noSerieMotor").removeAttr("disabled");
}
</script>   
@endsection