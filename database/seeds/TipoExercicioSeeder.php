<?php

use Illuminate\Database\Seeder;
use App\TipoExercicio;

class TipoExercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoExercicio::create([
        	'titulo' => 'coxas',
        ]);
        TipoExercicio::create([
        	'titulo' => 'glúteos',
        ]);
        TipoExercicio::create([
        	'titulo' => 'panturrilhas',
        ]);
        TipoExercicio::create([
        	'titulo' => 'abdomem',
        ]);
        TipoExercicio::create([
        	'titulo' => 'lombar',
        ]);
        TipoExercicio::create([
        	'titulo' => 'costas',
        ]);
        TipoExercicio::create([
        	'titulo' => 'peitorais',
        ]);
        TipoExercicio::create([
        	'titulo' => 'ombros',
        ]);
        TipoExercicio::create([
        	'titulo' => 'bíceps',
        ]);
        TipoExercicio::create([
        	'titulo' => 'tríceps',
        ]);
        TipoExercicio::create([
        	'titulo' => 'antebraço',
        ]);
        TipoExercicio::create([
        	'titulo' => 'trapézio',
        ]);
    }
}
