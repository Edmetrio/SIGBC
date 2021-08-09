<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaempresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendaempresa', function (Blueprint $table) {
            $table->uuid('vendaempresa_id')->primary();
            $table->uuid('automovel_id');
            $table->foreign('automovel_id')->references('id')->on('automovel');
            $table->uuid('utilizador_id');
            $table->foreign('utilizador_id')->references('id')->on('utilizador');
            $table->double('quantidade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendaempresa');
    }
}
