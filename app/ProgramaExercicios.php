<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaExercicios extends Model
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
