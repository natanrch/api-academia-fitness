<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TelaUsuarioController extends Controller
{
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
        return view('ficha.ficha');
    }
     public function adm()
    {
        return view('site.perfil-adm');
    }
}

