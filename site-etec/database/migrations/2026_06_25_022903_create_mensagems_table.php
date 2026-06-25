<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Migration da tabela mensagens
|--------------------------------------------------------------------------
| Esta migration cria a tabela responsável por armazenar as mensagens
| enviadas pelo formulário do site da ETEC.
*/

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->id();

            // Nome do aluno ou visitante que enviou a mensagem
            $table->string('nome');

            // E-mail para contato
            $table->string('email');

            // Assunto relacionado ao contato
            $table->string('assunto');

            // Mensagem enviada pelo formulário
            $table->text('mensagem');

            // Data de criação e atualização do registro
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mensagens');
    }
};