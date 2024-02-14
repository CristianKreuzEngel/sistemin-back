<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabela Bebida
        Schema::create('tb_bebida', function (Blueprint $table) {
            $table->id('id_bebida');
            $table->string('desc', 255);
            $table->double('valor', 8,2);
            $table->integer('qtd');
        });

        // Tabela Tamanhos
        Schema::create('tb_tamanhos', function (Blueprint $table) {
            $table->id('id_tamanho');
            $table->string('tamanhos', 255);
            $table->string('medidas', 255);
            $table->double('valor', 8,2);
            $table->integer('qtd_sabores');
        });

        // Tabela pedidos
        Schema::create('tb_pedidos', function (Blueprint $table) {
            $table->id('id_pedido');
            $table->integer('id_cliente');
            $table->integer('id_tamanho');
            $table->integer('id_sabores');
            $table->string('observacao');
            $table->double('valor_total', 8,2);
            $table->integer('id_motoboy');
            $table->integer('id_bebida');
            $table->string('forma_pagamento');
            $table->integer('id_cupom');
            $table->integer('id_promo');
        });

        // Tabela de cupons
        Schema::create('tb_cupom', function (Blueprint $table) {
            $table->id('id_cupom');
            $table->string('codigo_cupom', 255);
            $table->double('valor_desconto', 8,2);
            $table->boolean('permanent')->default(false);
            $table->integer('qtd_uso');
            $table->date('data_inicial');
            $table->date('data_final');
        });

        // Tabela Sabor
        Schema::create('tb_sabores', function (Blueprint $table) {
            $table->id('id_sabor');
            $table->integer('cod_sabor');
            $table->string('nome_sabor');
            $table->string('descricao');
            $table->boolean('borda');
            $table->boolean('exotico');
            $table->boolean('status');
        });

        // Tabela cliente
        Schema::create('tb_cliente', function (Blueprint $table) {
            $table->id('id_cliente');
            $table->integer('cod_cliente');
            $table->string('nome_cliente', 255);
            $table->string('telefone', 255);
            $table->string('endereco', 4000);
            $table->string('email', 255);
            $table->integer('totalPedidos');
            $table->string('hash_psd', 400);
        });

        // Tabela usuarios
        Schema::create('tb_usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->integer('cod_usuario');
            $table->string('nome', 255);
            $table->string('email', 255);
            $table->string('telefone', 255);
            $table->integer('nivel'); 
        });
        
        // Tabela  Promocao
        Schema::create('tb_promocoes', function (Blueprint $table) {
            $table->id('id_promocao');
            $table->integer('cod_promo');
            $table->string('nome',255);
            $table->string('desconto', 255);
        });

        // Tabela Motoboy
        Schema::create('tb_motoboy', function (Blueprint $table) {
            $table->id('id_motoboy');
            $table->integer('cod_motoboy');
            $table->string('nome', 255);
            $table->string('placa', 255);
            $table->double('reputacao', 1,2);
            $table->string('telefone', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_');
    }
};
