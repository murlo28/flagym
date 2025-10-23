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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('CPF')->unique();
            $table->date('data_nascimento');    
            $table->string('telefone');
            $table->string('email')->unique();
            $table->string('endereco'); 
            $table->boolean('status')->default(true);
            $table->date('data_cadastro')->default(now());
            $table->string('restricao_fisica')->nullable();
            $table->string('login')->unique();
            $table->string('senha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
