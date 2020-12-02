<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EntregaController;
use App\Http\Controllers\ChamadoController;




Route::get('/', function () {
    return view('welcome');
});

// Rotas Produto
Route::get('/produto', function(){
    return view('menuProduto');
});

Route::get('produto/cadastro', [ProdutoController::class, 'redirect1']);

Route::get('produto/mostra', [ProdutoController::class, 'index']);

Route::post('produto/cadastro', [ProdutoController::class, 'store']);

Route::post('produto/mostra', [ProdutoController::class, 'index']);


// Rotas Entrega
Route::get('/entrega', function(){
    return view('menuEntrega');
});

Route::get('entrega/cadastro', [EntregaController::class, 'redirect1']);

Route::get('entrega/mostra', [EntregaController::class, 'index']);

Route::post('entrega/cadastro', [EntregaController::class, 'store']);

Route::post('entrega/mostra', [EntregaController::class, 'index']);


//Rotas Chamado
Route::get('/chamado', function(){
    return view('menuChamado');
});

Route::get('chamado/cadastro', [ChamadoController::class, 'redirect1']);

Route::get('chamado/mostra', [ChamadoController::class, 'index']);

Route::post('chamado/cadastro', [ChamadoController::class, 'store']);

Route::post('chamado/mostra', [ChamadoController::class, 'index']);


//Rotas Middleware
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
