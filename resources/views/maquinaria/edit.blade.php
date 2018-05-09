@extends('layouts.maqlay')

@section('content')

    <div class="col-sm-8">
        <h2>
            Editar clasificacion
            <a href="{{ route('maqui.index') }}" class="btn btn-default pull-right">Listado</a>
        </h2>
        @include('maquinaria.fragment.error')
        {!! Form::model($maq, ['route' => ['maqui.update', $maq->id], 'method'=>'PUT']) !!}
        @include('maquinaria.fragment.form')
        {!! Form::close() !!}
    </div>

    <div class="col-sm-4">
        @include('maquinaria.fragment.aside')
    </div>

@endsection