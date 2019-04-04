<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionaColunasTableFichas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fichas', function ($table) {
            $table->string('treino_aerobico', 20)->nullable()->change();
            $table->integer('tempo_aerobico')->nullable();
            $table->integer('intervalo')->nullable();
            $table->date('revisao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
