<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    public function tipo_exercicio()
    {
    	return $this->belongsTo('App\TipoExercicio');
    }
}
