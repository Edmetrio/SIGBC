<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendaindividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendaindividual', function (Blueprint $table) {
            $table->uuid('vendaindividual')->primary();
            $table->uuid('combustivel_id');
            $table->foreign('combustivel_id')->references('id')->on('combustivel');
            $table->uuid('utilizador_id');
            $table->foreign('utilizador_id')->references('id')->on('utilizador');
            $table->string('cartao')->unique();
            $table->double('quantidade')->nullable();
            $table->double('valor')->nullable();
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
        Schema::dropIfExists('vendaindividual');
    }
}
