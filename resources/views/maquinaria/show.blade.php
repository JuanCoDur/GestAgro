@extends('layouts.maqlay')

@section('content')
    {{--<div class="col-sm-4">--}}
        {{--@include('maquinaria.fragment.aside')--}}
    {{--</div>--}}
    {{--<p>  S.A de C.V</p>--}}

    <div class="col-sm-12">
        {{--<h2>--}}
        {{--{{ $class->nomClasif }}--}}
        {{--<a href="{{ route('clasifi.edit', $class->id) }}"class="btn btn-default pull-right">Editar</a>--}}
        {{--</h2>--}}
        <a href="{{ route('maqui.index') }}" class="btn btn-info" role="button">Regresar</a>
        {{--<a href="{{ route('maqui.edit') }}" class="btn btn-info">Editar</a>--}}
        <div class="col-sm-8">
            <div>
                <br>
                <label>Marca</label><br>
                <label for="" style="background-color: wheat">{{ $maq->idmarc }}</label>
            </div>
            <div>
                <br>
                <label>Combustible</label><br>
                <label for="" style="background-color: wheat">{{ $maq->Combustible }}</label>
            </div>
            <div>
                <br>
                <label>Rendimiento: </label><br>
                <label for="" style="background-color: wheat">{{ $maq->Rendimiento }}</label>
            </div>
            <div>
                <br>
                <label>Modelo</label><br>
                <label for="" style="background-color: wheat">{{ $maq->ModeloMaq }}</label>
            </div>
            <div>
                <br>
                <label>Año de Fabricación</label><br>
                <label for="" style="background-color: wheat">{{ $maq->yearFabricacion }}</label>
            </div>
            <div>
                <br>
                <label>Año de depreciación</label><br>
                <label for="" style="background-color: wheat">{{ $maq->Adepreciacion }}</label>
            </div>
            <div>
                <br>
                <label>Valor actual</label><br>
                <label for="" style="background-color: wheat">{{ $maq->ValorActMaq }}</label>
            </div>
            <div>
                <br>
                <label>Unidad</label><br>
                <label for="" style="background-color: wheat">{{ $maq->Unidad	 }}</label>
            </div>
            <div>
                <br>
                <label>Número de servicio</label><br>
                <label for="" style="background-color: wheat">{{ $maq->noSerieMotor }}</label>
            </div>
        </div>
   </div>

@endsection