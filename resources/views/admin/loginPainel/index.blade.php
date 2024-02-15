@extends('layouts.app')

@section('head')
 <link href="{{ asset('assets/css/painel/styles.css')}}" rel="stylesheet">
 <!-- <link  href="{{ asset('assets/css/login/style.css') }}" rel="stylesheet"> -->
@endsection

@section('title', 'Painel Administrativo')

@section('content')
<main class="main">
        <div class="login-container" id="login-container">
            <div class="form-container">
                <form class="form form-login">
                    <h2 class="form-title">Entre</h2>
                    <div class="form-input-container">
                        <input type="email" class="form-input" placeholder="Email">
                        <input type="password" class="form-input" placeholder="Senha">
                    </div>
                    <a href="#" class="form-link">Esqueceu a senha?</a>
                    <button type="button" class="form-button">Logar</button>
                </form>
            </div>
</main>
@endsection