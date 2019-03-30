<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProgramaDeTreinamento;
use App\User;


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
        $users = User::where('tipo', 'default')->get();
    	return view('site.perfilinstrutor', [
            'users' => $users,
        ]);
    }
    public function escolhaPerfil()
    {
    	return view('site.primeiraetapalogin');
    }
    public function ficha()
    {
        $programaDeTreinamento = $this->programaDeTreinamento->find(2);
        return view('ficha.ficha', [
            'treino' => $programaDeTreinamento,
        ]);
    }
    

    public function adm()
    {
        return view('site.perfil-adm');
    }
}

