<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaExercicio extends Model
{
	protected $fillable = ['ficha_id', 'exercicio_id', 'repeticoes', 'series', 'peso', 'treino_id'];

    public function exercicio()
    {
    	return $this->belongsTo('App\Exercicio');
    }

    public function treino()
    {
    	return $this->belongsTo(Treino::class);
    }
}
