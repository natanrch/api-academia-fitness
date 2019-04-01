<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    protected $fillable = ['user_id', 'dias_de_treinamento', 'objetivo', 'metodo', 'aquecimento', 'treino_aerobico', 'observacoes'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function ficha_exercicios()
    {
    	return $this->hasMany(FichaExercicio::class);
    }
}
