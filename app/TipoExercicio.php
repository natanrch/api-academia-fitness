<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoExercicio extends Model
{
    public function exercicios()
    {
    	return $this->hasMany('App\Exercicio');
    }
}
