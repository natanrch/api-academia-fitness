<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltimoTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ultimo_treinos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ficha_id');
            $table->unsignedInteger('treino_id');
            $table->foreign('ficha_id')->references('id')->on('fichas');
            $table->foreign('treino_id')->references('id')->on('treinos');
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
        Schema::table('ultimo_treinos', function (Blueprint $table) {
            $table->dropForeign(['treino_id']);
            $table->dropForeign(['ficha_id']);
        });
        Schema::dropIfExists('ultimo_treinos');
    }
}
