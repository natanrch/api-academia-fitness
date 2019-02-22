<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->date('data_de_nascimento');
            $table->integer('dias_de_treinamento')->nullable();
            $table->string('objetivo')->nullable();
            $table->string('método')->nullable();
            $table->integer('aquecimento')->nullable();
            $table->integer('treino_aerobico')->nullable();
            $table->string('observacoes')->nullable();
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
        Schema::dropIfExists('fichas');
    }
}
