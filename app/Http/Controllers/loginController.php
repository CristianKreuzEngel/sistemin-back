<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function index(){
        return view('admin/loginCliente/index');
    }

    public function loginPainel(){
        return view('admin/loginPainel/index');
    }
}   