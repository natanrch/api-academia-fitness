<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProgramaExerciciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programa_exercicios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('programa_de_treinamento_id');
            $table->unsignedInteger('exercicio_id');
            $table->integer('repeticoes');
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
        Schema::dropIfExists('programa_exercicios');
    }
}
