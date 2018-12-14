@extends('layouts.app')

@section('content')
    <div class="container"  >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-dark">
                    <div class="card-header border-dark" style="background: silver">LISTAGEM DE CLIENTES</div>
                    <div class="card-body">
                        <table class="table">
                            <th class="border-right border-left">
                                <a>ID</a>
                            </th>
                            <th class="border-right" >NOME</th>
                            <th class="border-right" >IMPORTANCIA</th>
                            <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td class="border-right border-left border-bottom">{{$cliente->id}}</td>
                                    <td class="border-bottom"><a href="clientes/{{$cliente->id}}/dados" style="color:black">{{$cliente->nome}}</a>
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
