<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaExercicio extends Model
{
	protected $fillable = ['programa_de_treinamento_id', 'exercicio_id', 'repeticoes', 'series', 'peso', 'treino'];

    public function exercicio()
    {
    	return $this->belongsTo('App\Exercicio');
    }
}
