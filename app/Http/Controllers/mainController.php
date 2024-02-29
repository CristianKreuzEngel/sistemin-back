<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function painel(){
        return view('admin/painel/home/painel');
    }

    public function painelAnalise(){
        return view('admin/painel/analise/painel');
    }

    public function painelPedido(){
        return view('admin/painel/pedido/painel');
    }

    public function cardapio(){
        return view('admin/cardapio/index');
    }

    public function bebida(){
        return view('admin/bebida/index');
    }

    public function motoboy(){
        return view('admin/motoboy/index');
    }
}
