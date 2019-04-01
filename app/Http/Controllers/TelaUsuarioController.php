<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichaExercicio;
use App\User;


class TelaUsuarioController extends Controller
{
    protected $fichaExercicio;

    public function __construct(FichaExercicio $fichaExercicio)
    {
        $this->fichaExercicio = $fichaExercicio;
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
        $fichaExercicio = $this->fichaExercicio->find(2);
        return view('ficha.ficha', [
            'treino' => $fichaExercicio,
        ]);
    }

    public function adm()
    {
        return view('site.perfil-adm');
    }

    public function sobreNos()
    {
        return view('layouts.sobrenos');
    }
}

