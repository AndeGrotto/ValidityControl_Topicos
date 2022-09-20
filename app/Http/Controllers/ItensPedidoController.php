<?php

namespace App\Http\Controllers;

use App\Models\ItensPedido;
use Illuminate\Http\Request;

class ItensPedidoController extends Controller
{
    public function index() {
        $itensPedidos = ItensPedido::all();
        return view('itensPedidos', ['itensPedidos'=>$itensPedidos]);
    }
}
