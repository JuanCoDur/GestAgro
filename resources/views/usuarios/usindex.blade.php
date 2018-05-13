@extends('layouts.usuariolay')
@section('content')
    <div class="col-sm-8">
        <h2>
            USUARIO
        </h2>
        @include('usuarios.fragment.info')
                <table class="table table-striped table-condensed table-hover">
                    <thead>
                    <tr>
                        <th>Usuario</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($us as $usa)
                        <tr>
                            <td>
                                <strong>{{ $usa->name }}</strong>
                            </td>
                            <td>
                                <a href="{{ route('users.edit', $usa->id) }}" class="btn btn-info">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
        {!! $us->render() !!}
        @include('usuarios.fragment.aside')
    </div>
@endsection