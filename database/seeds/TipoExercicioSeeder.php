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
            'imagem' => 'Coxa.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'glúteos',
            'imagem' => 'Glúteo.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'panturrilhas',
            'imagem' => 'Panturrilha.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'abdomem',
            'imagem' => 'Abdômen.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'lombar',
            'imagem' => 'Lombar.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'costas',
            'imagem' => 'Costas.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'peitorais',
            'imagem' => 'Peitorais.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'ombros',
            'imagem' => 'Ombros.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'bíceps',
            'imagem' => 'Bíceps.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'tríceps',
            'imagem' => 'Tríceps.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'antebraço',
            'imagem' => 'Antebraço.jpg',
        ]);
        TipoExercicio::create([
        	'titulo' => 'trapézio',
            'imagem' => 'Trapézio.jpg',
        ]);
    }
}
