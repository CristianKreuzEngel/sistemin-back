@extends('layouts.app')
@section('head')
@endsection
@section('title', 'Entre')

@section('content')
<section class="container">
        <header>Registro de Dados</header>
        <form action="#" class="form">
            <div class="input-box">
                <label>Nome Completo</label>  
                 <input type="text" placeholder="Confirmar Nome" required>
            </div>

            <div class="input-box">
                <label>Email</label>  
                 <input type="text" placeholder="Confirmar Email" required>
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Telefone</label>  
                     <input type="number" placeholder="Confirmar Telefone" required>
                </div>

                <div class="input-box">
                    <label>Data de Nascimento</label>  
                     <input type="date" placeholder="Confirmar Data de Nascimento" required>
                </div>
            </div>

            <div class="gender-box">
                <h3>Genero</h3>
                <div class="gender-option">
                  <div class="gender">
                    <input type="radio" id="check-male" name="gender" checked>
                    <label for="check-male">Masculino</label>
                 </div>
                 <div class="gender">
                    <input type="radio" id="check-female" name="gender">
                    <label for="check-female">Feminino</label>
                 </div>
                 <div class="gender">
                    <input type="radio" id="check-other" name="gender">
                    <label for="check-other">Outro</label>
                 </div>
                </div>
            </div>

            <div class="input-box addres">
                <label>Endereço</label>  
                 <input type="text" placeholder="Confirmar Rua do Endereço" required>
                 <input type="text" placeholder="Confirmar Rua do Endereço linha 2" required>
                 <div class="column">
                    <div class="select-box">
                        <select>
                            <option hidden>Pais</option>
                            <option>Brasil</option>
                        </select>
                    </div>
                 </div>
            
                 <input type="text" placeholder="Confirmar sua Cidade" required>
                 <input type="text" placeholder="Confirmar seu Bairro" required>
                 <input type="number" placeholder="Confirmar numero da casa ou apartamento" required>
            </div>

            <button>Confirmar</button>
        </form>
    </section>
@endsection