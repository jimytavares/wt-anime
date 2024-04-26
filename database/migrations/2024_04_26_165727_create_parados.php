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
        Schema::create('parados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_anime');
            $table->foreign('id_anime')->references('id')->on('animes');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
            $table->integer('episodio');
            $table->integer('nota');
            $table->mediumtext('descricao');
            $table->string('link', length: 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parados');
    }
};
