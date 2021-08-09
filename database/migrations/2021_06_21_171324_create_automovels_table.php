<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovel', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('empresa_id');
            $table->foreign('empresa_id')->references('id')->on('empresa');
            $table->uuid('combustivel_id');
            $table->foreign('combustivel_id')->references('id')->on('combustivel');
            $table->string('matricula')->unique();
            $table->double('quantidade');
            $table->boolean('estado')->default();
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
        Schema::dropIfExists('automovel');
    }
}
