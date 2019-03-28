<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ColunaTreinoEmFichaExercicios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ficha_exercicios', function ($table) {
            $table->string('treino', 1);
            $table->integer('repeticoes')->nullable()->change();
            $table->integer('series')->nullable()->change();
            $table->float('peso', 8, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
