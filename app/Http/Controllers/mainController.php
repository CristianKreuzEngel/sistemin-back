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

    public function cardapio(){
        return view('admin/cardapio/index');
    }
}
