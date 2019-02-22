<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaExercicio extends Model
{
    public function programa_de_treinamento()
    {
    	return $this->belongsTo('App\ProgramaDeTreinamento');
    }

    public function exercicio()
    {
    	return $this->belongsTo('App\Exercicio');
    }
}
