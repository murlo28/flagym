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
        Schema::create('mensalidade', function (Blueprint $table) {
            $table->id();
            $table->decimal('valor', 8, 2);
            $table->int('mesreferencia');
            $table->date('datarecebimento');
            $table->string('metodoRecebimento');
            $table->boolean('status')->default(true); 
            $table->foreignId('Matricula_id')->constrained('matricula')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mensalidade');
    }
};
