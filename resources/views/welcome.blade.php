@extends('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/institucional/styles.css') }}">
<link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
@endsection
@section('title', 'Página inicial')
@section('header')
<!--home-->
<header class="max-width bg" id="home">
        <div class="container">
            <div class="menu">
                <div class="logo"></div>
                <div class="desktop-menu">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#service">Serviços</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#contact">Reservas</a></li>
                    </ul>
                </div>

                <div class="mobile-menu" onclick="menuMobile()">
                    <i class="fa-solid fa-bars"></i>
                    <ul id="mylinks">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">Sobre</a></li>
                        <li><a href="#service">Serviços</a></li>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#contact">Reservas</a></li>
                    </ul>
                </div>
            </div>
            <div class="call">
                <div class="left">
                    <img src="{{ asset('assets/img/pizzaD.png')}}" alt="">
                </div>
                <div class="rigth">
                    <h1 class="color-laranja text-gd">Pizzaria Degustar</h1>
                    <h2 class="color-cinza-1 text-md">Experimente a melhor pizza da região </h2>
                    <p class="text-pq">Ligou chegou! Rapidez e capricho para você comer uma pizza saborosa sem precisar colocar o pé na rua. Ligue agora ou peça pelo aplicativo, até às 20h a entrega é por nossa conta!</p>
                    <button>Ver Menu</button>
                </div>
            </div>
        </div>
    </header>
    <script>
        // Menu Mobile
        function menuMobile(){
            var x = document.getElementById("myLinks")
            if(x.style.display === "block"){
                x.style.display = "none"
            }else{
                x.style.display = "block"
            }
        }
     </script>
@endsection
@section('content')
    
    

     <!--about-->

     <section class="max-width bg" id="about">
        <div class="container">
            <div class="call">
                <div class="left">
                    <span class="text-title color-laranja">Sobre Nós</span>
                    <h2 class="text-md color-cinza-1">Nós cozinhamos a comida mais saborosa</h2>
                    <p>Não sei você, mas para mim pizza só serve se tiver muito recheio! 
                       Aqui é assim, você sente a vontade daí e a gente mata em alguns minutinhos na porta da sua casa. A pizza mais recheada do bairro agora na sua casa. </p>
                       <button>Saiba Mais</button>
                </div>
                <div class="right">
                    <img src="{{ asset('assets/img/pizzaD.png')}}" alt="">
                </div>
            </div>
        </div>
     </section>

     <!--service-->

      <section class="max-width bg" id="service">
        <div class="container">
            <div class="content">
                <div class="titulo">
                    <span class="text-title color-laranja">Ofertas</span>
                    <h2 class="text-md color-cinza-1">Nossos Serviços</h2>
                </div>
                <div class="down">
                    <div class="box">
                        <i class="fa fa-cutlery text-gd color-laranja"></i>
                        <h2>A melhor comida</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem animi quasi sapiente, soluta iste necessitatibus distinctio vero nesciunt, architecto nihil possimus velit minus a perferendis delectus accusamus non voluptates?</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-pizza-slice text-gd color-laranja"></i>
                        <h2>Comida rápida</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem animi quasi sapiente, soluta iste necessitatibus distinctio vero nesciunt, architecto nihil possimus velit minus a perferendis delectus accusamus non voluptates?</p>
                    </div>
                    <div class="box">
                        <i class="fa fa-motorcycle text-gd color-laranja"></i>
                        <h2>Entrega</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem animi quasi sapiente, soluta iste necessitatibus distinctio vero nesciunt, architecto nihil possimus velit minus a perferendis delectus accusamus non voluptates?</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!--menu-->

      <section class="max-width bg" id="menu">
        <div class="container">
            <div class="content">
                <div class="titulo">
                    <span class="text-title color-laranja">Prato do Dia</span>
                    <h2 class="text-md color-cinza-1">Cardápio do dia</h2>
                </div>
                <div class="down">
                    <div class="box">
                        <img src="{{ asset('assets/img/pizzaD.png')}}" alt="">
                        <h2 class="color-laranja">Pizza de Pepperoni</h2>
                        <p class="text-md">Pizza deliciosa</p>
                        <p>R$ 45,99</p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/pizzaD.png')}}" alt="">
                        <h2 class="color-laranja">Pizza de Pepperoni</h2>
                        <p class="text-md">Pizza deliciosa</p>
                        <p>R$ 45,99</p>
                    </div>
                    <div class="box">
                        <img src="{{ asset('assets/img/pizzaD.png')}}" alt="">
                        <h2 class="color-laranja">Pizza de Pepperoni</h2>
                        <p class="text-md">Pizza deliciosa</p>
                        <p>R$ 45,99</p>
                    </div>
                </div>
            </div>
        </div>
      </section>

      <!--about-->

      <section class="max-width bg" id="contact">
        <div class="container">
            <div class="call">
                <div class="left">
               <span class="text-title color-laranja">Contato</span>
               <h2 class="text-md color-cinza-1">O contato esta disponivel para reservas via whatsapp, (49) 98887-5523.</h2>
               <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit ea quo nisi aliquid placeat minus expedita saepe itaque, rerum quam maiores vitae aperiam, aliquam, tempore mollitia. Eaque, enim? In, accusamus.
               </p>
            </div>
            <div class="right">
                <img src="{{ asset('assets/img/pizzaD.png')}}" alt="">
            </div>
            </div>
        </div>
      </section>
@endsection
@section('footer')
  <!--footer-->
        <footer>
            <div class="container">
                <img src="{{ asset('assets/img/logo.jpeg')}}" alt="">
                <p class="text-pq">Copyright 2023  <span class="color-laranja">Pizzaria Degustar</span> Todos os direitos reservados</p>
                <p class="text-pq">Tel: (49) 98878-6633</p>
                <p class="text-pq">Desenvolvido por KirlianByte</p>
            </div>
        </footer>
@endsection
@section('script')

@endsection