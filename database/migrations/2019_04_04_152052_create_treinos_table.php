<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use App\Treino;

class CreateTreinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('treino', 1);
            $table->timestamps();
        });
        Treino::create([
            'treino' => 'A'
        ]);
        Treino::create([
            'treino' => 'B'
        ]);
        Treino::create([
            'treino' => 'C'
        ]);
        Treino::create([
            'treino' => 'D'
        ]);
        Treino::create([
            'treino' => 'E'
        ]);
        Treino::create([
            'treino' => 'F'
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('treinos');
    }
}
