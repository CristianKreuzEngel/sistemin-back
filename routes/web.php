<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\mainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Rota página inicial
route::get('/', [mainController::class, 'index'] )->name('home');

//Rota login Cliente
route::get('/login', [loginController::class, 'index'])->name('login.cliente');


route::get('/painel/pedidos', [mainController::class, 'painelPedido'])->name('painel.pedidos');


// ---- ROTAS PAINEL ----
//Rota painel home
route::get ('/painel', [mainController::class, 'painel'])->name('painel.home');

//Rota painel analise
route::get ('/painel/analise', [mainController::class, 'painelAnalise'])->name('painel.analise');



//Rota painel cardapio
route::get('/cardapio', [mainController::class, 'cardapio'])->name('painel.cardapio');

//Rota painel bebida
route::get('/bebida' ,[mainController::class,'bebida'])->name('painel.bebida');

//Rota painel login 
route::get('/painel/login', [loginController::class, 'loginPainel'])->name('painel.login');

//Rota painel motoboy
route::get('/painel/motoboy' ,[mainController::class,'motoboy'])->name('painel.motoboy');