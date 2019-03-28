<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaChavesEstrangeiras extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('exercicios', function ($table) {
            $table->foreign('tipo_exercicio_id')->references('id')->on('tipo_exercicios');
        });
        Schema::table('ficha_exercicios', function ($table) {
            $table->unsignedInteger('ficha_id');
            $table->foreign('exercicio_id')->references('id')->on('exercicios');
            $table->foreign('ficha_id')->references('id')->on('fichas');
        });
        Schema::table('ficha_instrutors', function ($table) {
            $table->foreign('instrutor_id')->references('id')->on('users');
            $table->foreign('ficha_id')->references('id')->on('fichas');
        });
        Schema::table('fichas', function ($table) {
            $table->unsignedInteger('user_id')->change();
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('exercicios', function ($table) {
            $table->dropForeign(['tipo_exercicio_id']);
        });
        Schema::table('ficha_exercicios', function ($table) {
            $table->dropForeign(['exercicio_id']);
            $table->dropForeign(['ficha_id']);
        });
        Schema::table('ficha_instrutors', function ($table) {
            $table->dropForeign(['instrutor_id']);
            $table->dropForeign(['ficha_id']);
        });
        Schema::table('fichas', function ($table) {
            $table->dropForeign(['user_id']);
        });
    }
}
