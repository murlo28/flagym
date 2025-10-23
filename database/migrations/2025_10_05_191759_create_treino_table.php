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
        Schema::create('treino', function (Blueprint $table) {
            $table->id();
            $table->string('frequencia');
            $table->date('data');
            $table->boolean('status')->default(true);  
            $table->foreignId('cliente_id')->constrained('cliente')->onDelete('cascade');
            $table->foreignId('funcioanrio_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('treino');
    }
};
