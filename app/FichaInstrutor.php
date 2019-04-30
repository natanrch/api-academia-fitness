<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FichaInstrutor extends Model
{
    protected $fillable = ['ficha_id', 'instrutor_id'];

    public function ficha()
    {
    	return $this->belongsTo(Ficha::class);
    }

    public function instrutor()
    {
    	return $this->belongsTo(User::class);
    }
}
