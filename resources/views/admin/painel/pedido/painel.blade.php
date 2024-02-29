@extends('layouts.app')

@section('head')
 <link href="{{ asset('assets/css/painel/styles.css')}}" rel="stylesheet">
@endsection

@section('title', 'Painel Administrativo')

@section('content')
<div class="container">
        <!-- Sidebar -->
        <aside>
            <div class="toggle">
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="{{route('painel.home')}}">
                    <span class="material-icons-sharp">
                        dashboard
                    </span>
                    <h3>Dashboard</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        person_outline
                    </span>
                    <h3>Usuarios</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        receipt_long
                    </span>
                    <h3>Historico</h3>
                </a>
                <a href="{{route('painel.analise')}}">
                    <span class="material-icons-sharp">
                        insights
                    </span>
                    <h3>Analises</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        mail_outline
                    </span>
                    <h3>Tickets</h3>
                </a>
                <a href="{{route('painel.pedidos')}}" class="active">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Pedidos</h3>
                    <span class="message-count">27</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        report_gmailerrorred
                    </span>
                    <h3>Relatorio</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        settings
                    </span>
                    <h3>Configurações</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp"> 
                        add
                    </span>
                    <h3>Novo Login</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Sair</h3>
                </a>
            </div>
        </aside>
        <!-- Final da Sidebar -->

        <!-- Main -->
        <main>
            <h1>BEM VINDO</h1>
            <!-- Analises -->
            <div class="analyse">   
                <div class="sales">
                    <div class="status">
                        <div class="info">
                            <h3>Valor das Vendas</h3>
                            <h1>$65,024</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>80</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="visits">
                    <div class="status">
                        <div class="info">
                            <h3>Numero de Vendas</h3>
                            <h1>24,981</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>48</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="searches">
                    <div class="status">
                        <div class="info">
                            <h3>Numero de Pedidos</h3>
                            <h1>14,147</h1>
                        </div>
                        <div class="progresss">
                            <svg>
                                <circle cx="38" cy="38" r="36"></circle>
                            </svg>
                            <div class="percentage">
                                <p>21</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Final das Analises -->
{{-- 
            <!-- Novos Usuarios -->
            <div class="new-users">
                <h2>Novos Usuarios</h2>
                <div class="user-list">
                    <div class="user">
                        <img src="{{asset('assets/img/profile-2.jpg')}}">
                        <h2>João</h2>
                        <p>54 Min Ago</p>
                    </div>
                    <div class="user">
                        <img src="{{asset('assets/img/profile-3.jpg')}}">
                        <h2>Amilton</h2>
                        <p>3 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="{{asset('assets/img/profile-4.jpg')}}">
                        <h2>Luiz</h2>
                        <p>6 Hours Ago</p>
                    </div>
                    <div class="user">
                        <img src="{{asset('assets/img/plus.png')}}">
                        <h2>Mais</h2>
                        <p>Novo Usuario</p>
                    </div>
                </div>
            </div>
            <!-- Final de Novos Usuarios --> --}}

            <!-- Pedidos Recentes-->
            <div class="recent-orders">
                <h2>Pedidos Recentes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Cliente</th>
                            <th>Telefone</th>
                            <th>Pagamento</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody></tbody>
                </table>
                <a href="{{route('painel.pedidos')}}">Mostre tudo</a>
            </div>
            <!-- Final dos Pedidos Recentes -->

        </main>
        <!-- Final da main -->

        <!-- Seção da direita -->
        <div class="right-section">
            <div class="nav">
                <button id="menu-btn">
                    <span class="material-icons-sharp">
                        menu
                    </span>
                </button>
                <div class="dark-mode">
                    <span class="material-icons-sharp active">
                        light_mode
                    </span>
                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                </div>

                <div class="profile">
                    <div class="info">
                        <p>Olá, <b>Luiz</b></p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="{{asset('assets/img/profile-1.jpg')}}">
                    </div>
                </div>

            </div>
            <!-- Final da Nav -->

            <div class="user-profile">
                <div class="logo">
                    <img src="{{asset('assets/img/logo.jpeg')}}">
                    <h2>Pizzaria Degustar</h2>
                </div>
            </div>

            <div class="reminders">
                <div class="header">
                    <h2>Lembretes</h2>
                    <span class="material-icons-sharp">
                        notifications_none
                    </span>
                </div>

                <div class="notification">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            volume_up
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Horario de Trabalho</h3>
                            <small class="text_muted">
                                17:00 PM - 23:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification deactive">
                    <div class="icon">
                        <span class="material-icons-sharp">
                            edit
                        </span>
                    </div>
                    <div class="content">
                        <div class="info">
                            <h3>Comprar mais materiais</h3>
                            <small class="text_muted">
                                15:00 PM
                            </small>
                        </div>
                        <span class="material-icons-sharp">
                            more_vert
                        </span>
                    </div>
                </div>

                <div class="notification add-reminder">
                    <div>
                        <span class="material-icons-sharp">
                            add
                        </span>
                        <h3>Adicionar Lembrete</h3>
                    </div>
                </div>

            </div>

        </div>


    </div>
@endsection
@section('script')
<script src="/assets/js/orders.js"></script>
<script src="/assets/js/index.js"></script>
@endsection