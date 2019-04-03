<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrutorAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrutor_alunos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('instrutor_id');
            $table->unsignedInteger('aluno_id');
            $table->string('status', 15);
            $table->foreign('instrutor_id')->references('id')->on('users');
            $table->foreign('aluno_id')->references('id')->on('users');
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
        Schema::table('instrutor_alunos', function (Blueprint $table) {
            $table->dropForeign(['aluno_id']);
            $table->dropForeign(['instrutor_id']);
        });
        Schema::dropIfExists('instrutor_aluno');
    }
}
