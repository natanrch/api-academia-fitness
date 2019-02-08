<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    public function programa_exercicios()
    {
    	return $this->hasMany('App\ProgramaExercicios');
    }
}
