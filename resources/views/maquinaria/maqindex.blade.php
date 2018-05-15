@extends('layouts.maqlay')
@section('content')
    <div class="col-sm-8">
        <h2>
            Maquinaria
            <a href="{{ route('maqui.create') }}" class="btn btn-success pull-right">Nuevo</a>
        </h2>
        @include('maquinaria.fragment.info')
                <table class="table table-striped table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año de Fabricación</th>
                        <th>Serie de motor</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($maq as $mqn)
                        <tr>
                            <td>
                                <strong>{{ $mqn->idmarc }}</strong>
                            </td>
                            <td>
                                <strong>{{ $mqn->ModeloMaq }}</strong>
                            </td>
                            <td>
                                <strong>{{ $mqn->yearFabricacion }}</strong>
                            </td>
                            <td>
                                <strong>{{ $mqn->noSerieMotor }}</strong>
                            </td>
                            <td>
                                <a href="{{ route('maqui.show', $mqn->id) }}" class="btn btn-info">Detalles</a>
                            </td>
                            <td>
                            <a href="" data-target="#modal-delete-{{$mqn->id}}" data-toggle="modal"><button type="submit" class="btn btn-danger">Eliminar</button></a>
                            </td>
                        </tr>
                        @include('maquinaria.fragment.modal')
                    @endforeach
                    </tbody>
                </table>
        {!! $maq->render() !!}
        @include('maquinaria.fragment.aside')
    </div>
@endsection