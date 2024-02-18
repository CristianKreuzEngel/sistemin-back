@extends('layouts.app')


@section('head')
    <link rel="stylesheet" href="{{ asset('assets/css/telabebida/style.css')}}">
@endsection
@section('title', 'Bebidas')

@section('content')
<body>
        <div class="header">
            <div class="center">
                <img src="{{asset('assets/img/logo.jpeg')}}">
            </div><!--center-->
        </div><!--header-->

        <div class="container-banner">
            <div class="center">
                <img src="{{asset('assets/img/imgtelabebida/banner-bebida.jpg')}}" >
            </div><!--center-->
        </div><!--container-banner-->

        <div class="coluna">    
            <div class ="center">
                <div class="bebidas">
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/coca2l.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola 2L</h2>
                        <p>Preço: R$10,00</p>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida1-->

                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/Coca-cola-zero-2l.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola Zero 2L</h2>
                        <p>Preço: R$10,00</p>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2-->

                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/fanta-laranja2l.webp')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola Zero 2L</h2>
                        <p>Preço: R$10,00</p>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida3-->
                </div><!--bebidas-->
            </div><!--center-->
        </div><!--coluna-->        
        
</body>
@endsection