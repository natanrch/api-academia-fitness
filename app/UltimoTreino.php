<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UltimoTreino extends Model
{
    protected $fillable = ['ficha_id', 'treino_id'];

    public function treino()
    {
    	return $this->belongsTo(Treino::class);
    }

    public function ficha()
    {
    	return $this->belongsTo(Ficha::class);
    }
}
