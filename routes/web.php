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
route::get('/', [mainController::class, 'index'] );

//Rota login
route::get('/login', [loginController::class, 'index']);


//Rota painel
route::get ('/painel', [mainController::class, 'painel']);


//Rota cardapio
route::get('/cardapio', [mainController::class, 'cardapio']);