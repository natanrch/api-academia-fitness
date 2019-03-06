<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramaDeTreinamento extends Model
{
	protected $fillable = ['titulo', 'user_id'];
	
    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function programa_exercicios()
    {
    	return $this->hasMany('App\ProgramaExercicios');
    }
}
