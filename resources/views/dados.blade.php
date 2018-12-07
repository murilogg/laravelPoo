@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">DADOS DO CLIENTE<a class="float-right" style="color: #1d2124"
                                                                href="{{url('clientes')}}">VOLTAR</a></div>

                    <div class="card-body">

                        @if(Request::is('*/dados'))
                            {!! Form::model($cliente, ['method'=>'PATCH','url'=> 'clientes/'.$cliente->id]) !!}
                        @else
                            {!! Form::open(['url'=>'clientes']) !!}
                        @endif

                        {!! Form::label('nome','Nome') !!}
                        {!! Form::input('text','nome',null,['class'=>'form-control']) !!}

                        {!! Form::label('cpd','CPF') !!}
                        {!! Form::input('text','cpf',null,['class'=>'form-control']) !!}

                        {!! Form::label('endereco','Endereço') !!}
                        {!! Form::input('text','endereco',null,['class'=>'form-control']) !!}

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
