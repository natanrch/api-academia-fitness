<?php

use Illuminate\Database\Seeder;
use App\UltimoTreino;

class UltimoTreinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UltimoTreino::create([
        	'ficha_id' => 2,
        	'treino_id' => 1
        ]);
    }
}
