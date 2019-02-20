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
}
