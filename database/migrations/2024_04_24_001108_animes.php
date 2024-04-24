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
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', length: 150);
            $table->timestamp('estreia');
            $table->string('temporada', length: 20);
            $table->integer('episodio');
            $table->string('genero', length: 255);
            $table->string('image', length: 255);
            $table->date('data_semana');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
