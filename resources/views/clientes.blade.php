@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">BEM - VINDO(A)
                        <a class="float-right" style="color: #1d2124" href="{{url('clientes')}}">LISTAGEM DE
                            CLIENTES</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Consultar</th>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>
                                        <a href="clientes/{{$cliente->id}}/dados"
                                           class="btn btn-outline-primary btn-sm">Dados do Cliente</a>
                                        {!! Form::open(['url'=>'/clientes/'.$cliente->id]) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
