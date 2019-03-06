<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaExercicio extends Model
{
	protected $fillable = ['programa_de_treinamento_id', 'exercicio_id', 'repeticoes', 'series', 'peso'];

    public function programa_de_treinamento()
    {
    	return $this->belongsTo('App\ProgramaDeTreinamento');
    }

    public function exercicio()
    {
    	return $this->belongsTo('App\Exercicio');
    }
}
