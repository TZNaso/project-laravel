<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListaReservaModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_reserva_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('users');
            // $table->bigInteger('id_carro');
            $table->foreign('id_carro')->references('id')->on('carro');
            $table->date('data');
            $table->date('data_reserva');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lista_reserva_models');
    }
}
