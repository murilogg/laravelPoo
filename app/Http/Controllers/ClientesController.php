<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::get();
        return view('clientes',['clientes'=>$clientes]);
    }

    public function dados($id){
        $cliente = Cliente::findOrFail($id);
        return view('dados',['cliente'=>$cliente]);
    }

}
