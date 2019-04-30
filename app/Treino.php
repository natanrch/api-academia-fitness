<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    protected $fillable = ['treino'];

    public function ficha_exercicios()
    {
    	return $this->hasMany(FichaExercicio::class);
    }
}
