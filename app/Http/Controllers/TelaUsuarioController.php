<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramaDeTreinamento;


class TelaUsuarioController extends Controller
{
    protected $programaDeTreinamento;

    public function __construct(ProgramaDeTreinamento $programaDeTreinamento)
    {
        $this->programaDeTreinamento = $programaDeTreinamento;
    }

    public function perfilUsuario()
    {
    	return view('site.perfilaluno');
    }

    public function perfilInstrutor()
    {
    	return view('site.perfilinstrutor');
    }
    public function escolhaPerfil()
    {
    	return view('site.primeiraetapalogin');
    }
    public function ficha()
    {
        $programaDeTreinamento = $this->programaDeTreinamento->find(1);
        return view('ficha.ficha', [
            'treino' => $programaDeTreinamento,
        ]);
    }
     public function adm()
    {
        return view('site.perfil-adm');
    }
}

