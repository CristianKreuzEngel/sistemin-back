@extends('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/motoboy/style.css')}}">
@endsection
@section('title', 'Tela Moto Boy')

@section('content')
    <div class="header">
        <div class="center">
            <img src="{{asset('assets/img/logo.jpeg')}}">
        </div><!--center-->
    </div><!--header-->
    
    <div id="main">
    <article class="mapa">
        
    </article><!--mapa-->
        <div class="back">
            <div class="center">
                <div class="detalhes-pedido">
                
                    <h2>Detalhes do Pedido</h2>
                    <ul>
                    <li>Endereço: <span id="endereco-cliente"></span></li>
                    <li>Nome: <span id="nome-cliente"></span></li>
                    <li>Número do Pedido: <span id="numero-pedido"></span></li>
                    <li>Itens do Pedido:</li>
                    <ul id="itens-pedido"></ul>
                    <li>Instruções de Entrega: <span id="instrucoes-entrega"></span></li>
                    <li>Forma de Pagamento: <span id="forma-pagamento"></span></li>
                    </ul>
                
                </div><!--detalhes-pedidos-->
            </div><!--center-->
        </div><!--back-->
        <div class="back">
            <div class="acoes">
                <button id="btn-cheguei">Cheguei</button>
                <button id="btn-entrega-realizada">Entrega Realizada</button>
            </div><!--acoes-->
        </div><!--back-->
    </div><!--main-->    

@endsection
@section('script')

@endsection
