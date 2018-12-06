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
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table">
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Endereço</th>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nome}}</td>
                                    <td>{{$cliente->endereco}}</td>

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
