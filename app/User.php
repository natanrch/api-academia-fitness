<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'tipo', 'data_de_nascimento', 'data_de_pagamento', 'modalidade', 'avaliacao', 'cref', 'novo_usuario', 'proxima_avaliacao'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    const ADMIN_TIPO = 'admin';
    const INSTRUTOR_TIPO = 'instrutor';
    const DEFAULT_TIPO = 'default';


    public function isAdmin()    {        
        return $this->tipo === self::ADMIN_TIPO;    
    }

    public function isInstrutor()   
    {        
        return $this->tipo === self::INSTRUTOR_TIPO;    
    }

    public function isDefault()
    {
        return $this->tipo === self::DEFAULT_TIPO;
    }
    
    public function isNovoUsuario()
    {
        return $this->novo_usuario == true;
    } 

    public function ficha()
    {
        return $this->hasOne('App\Ficha');
    }

    public function instrutor()
    {
        return $this->hasOne(InstrutorAluno::class, 'aluno_id');
    }

}
