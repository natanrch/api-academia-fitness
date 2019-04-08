<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstrutorAluno extends Model
{
    protected $fillable = ['instrutor_id', 'aluno_id', 'status'];

    public function instrutor()
    {
    	return $this->belongsTo(User::class);
    }

    public function aluno()
    {
    	return $this->belongsTo(User::class);
    }

}
