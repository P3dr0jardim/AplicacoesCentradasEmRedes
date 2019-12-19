<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJogosPlataformasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos_plataformas', function (Blueprint $table) {
            $table->unsignedInteger('jogo_id');
            $table->unsignedInteger('plataforma_id');
            $table->timestamps();

            $table->foreign('jogo_id')->references('id')->on('jogos');
            $table->foreign('plataforma_id')->references('id')->on('plataformas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos_plataformas');
    }
}
