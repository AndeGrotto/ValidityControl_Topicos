<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes', [\App\Http\Controllers\ClientesController::class, 'index']);

Route::get('itensPedidos', [\App\Http\Controllers\ItensPedidoController::class, 'index']);

Route::get('lotes', [\App\Http\Controllers\LotesController::class, 'index']);

Route::get('pedidos', [\App\Http\Controllers\PedidosController::class, 'index']);

Route::get('produtos', [\App\Http\Controllers\ProdutosController::class, 'index']);

Route::get('usuarios', [\App\Http\Controllers\UsuariosController::class, 'index']);



