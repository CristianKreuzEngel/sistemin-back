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
                <div class="logo">
                    <h2><span class="danger">Degustar</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                <a href="#">
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
                <a href="#">
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
                    <span class="message-count">27</span>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        inventory
                    </span>
                    <h3>Lista Vendas</h3>
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
                <a href="#" class="active">
                    <span class="material-icons-sharp">
                        wine_bar
                    </span>
                    <h3>Cadastro Bebidas</h3>
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
            <h1>Cadastro Bebidas</h1>
            <!-- Cadastro Bebidas -->
            <div class="caixa">
                
                <div class="cadastro">
                    <form action="cadastrar-bebida.php" method="post">
                        <label for="nome">Nome da Bebida:</label>
                        <input id="nome" name="nome" required>
                        <br/>
                        <label for="categoria">Categoria:</label>
                        <select id="categoria" name="categoria" required>
                          <option value="">Selecione...</option>
                          <option value="sucos">Sucos</option>
                          <option value="refrigerantes">Refrigerantes</option>
                          <option value="cervejas">Cervejas</option>
                        </select>
                
                        <br/>
                        <label for="imagem">Imagem:</label>
                        <input type="file" id="imagem" name="imagem" accept="image/*">
                        <br/>
                        <label for="preco">Preço:</label>
                        <input type="number" id="preco" name="preco" step="0.01" required>
                        <br/>
                        <label for="estoque">Estoque:</label>
                        <input type="number" id="estoque" name="estoque" required>
                        <br/>
                        <label for="disponibilidade">Disponível:</label>
                        <input type="checkbox" id="disponibilidade" name="disponibilidade" checked>
                        <br/>
                        <button type="submit">Salvar<br/button>
                        <button type="submit">Cancelar<br/button>
                        <button type="reset">Limpar<br/button>
                
                       
                      </form>
                </div>
            </div>
            
            <!-- Final Cadastro Bebidas -->

            

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