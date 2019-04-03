<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichaExercicio;
use App\Ficha;
use App\User;
use Auth;


class TelaUsuarioController extends Controller
{
    protected $fichaExercicio;
    protected $ficha;
    protected $user;

    public function __construct(FichaExercicio $fichaExercicio, Ficha $ficha, User $user)
    {
        $this->fichaExercicio = $fichaExercicio;
        $this->ficha = $ficha;
        $this->user = $user;
    }

    public function perfilUsuario()
    {   
        $ficha = $this->ficha->where('user_id', Auth::id())->first();
        if($ficha == null) {
            abort('404');
        }
    	return view('site.perfilaluno', [
            'ficha' => $ficha,
        ]);
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

