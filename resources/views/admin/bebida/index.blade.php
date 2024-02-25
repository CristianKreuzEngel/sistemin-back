@extends('layouts.app')


@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/telabebida/style.css')}}">
@endsection
@section('title', 'Bebidas')

@section('content')
<body>
        <div class="header">
            <div class="center">
                <img src="{{asset('assets/img/logo.jpeg')}}">
                <a href="#" class="carrinho"><i class="fas fa-shopping-cart"></i></a>
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
                        <img src="{{asset('assets/img/imgtelabebida/2L/COCA-COLA-2L.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->

                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/Coca-cola-zero-2l.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola Zero 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->

                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/fanta-laranja2l.webp')}}" alt="Coca-Cola 2L">
                        <h2>Fanta Laranja 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->

                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/guarana_2l.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Guaraná Antárctica 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Laranja 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/quipo_framboesa2l.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Framboesa 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/quipo_limao2l.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Limão 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Guaraná 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/2L/')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Cola limão 2L</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida2l-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/coca-cola-600ml.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/coca-cola-zero-600m.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola Zero 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/.jpg')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Cola 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Limão 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Guaraná 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/')}}" alt="Coca-Cola 2L">
                        <h2>Quipo Laranjinha 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/sprite_lemon_fresh_600ml.webp')}}" alt="Coca-Cola 2L">
                        <h2>Sprite Lemon Fresh 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/')}}" alt="Coca-Cola 2L">
                        <h2>Água com Gâs 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/600ml/')}}" alt="Coca-Cola 2L">
                        <h2>Água sem Gâs 600ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--bebida600ml-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Sprite 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Coca Cola Zero 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Fanta Laranja 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Guaraná 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Fanta Uva 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Schweppes Citrus 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Schweppes tônica 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Fys 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Amstel 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/lata/')}}" alt="Coca-Cola 2L">
                        <h2>Brahma 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Lata-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/sucos/')}}" alt="Coca-Cola 2L">
                        <h2>Suca Prats 900ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Suco-->
                    <div class="bebida">
                        <img src="{{asset('assets/img/imgtelabebida/sucos/')}}" alt="Coca-Cola 2L">
                        <h2>Suco Prats 350ml</h2>
                        <p>Preço: R$10,00</p>
                        <div class="quantidade">
                            <label for="quantidade">Quantidade:</label>
                            <input type="number" id="quantidade" name="quantidade" value="1" min="1" max="9">
                        </div>
                        <button>Adiciona ao Carrinho</button>
                    </div><!--Suco-->
                </div><!--bebidas-->
            </div><!--center-->
        </div><!--coluna-->        
        
</body>
@endsection