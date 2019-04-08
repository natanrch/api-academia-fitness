<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
	protected $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

    public function cadastraInstrutor(Request $request)
    {
    	$user = $this->user->create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'cpf' => $request->cpf,
    		'password' => bcrypt($request->password),
    		'cref' => $request->cref,
    		'tipo' => 'instrutor',
    		'novo_usuario' => 1,
    	]);

    	return redirect()->back()->with([
            'message' => [
                'content' => 'Instrutor cadastrado com sucesso!',
                'type' => 'success',
            ]
    	]);
    }

    public function cadastraAluno(Request $request)
    {
        $request->avaliacao->store('avaliacoes');
        return redirect()->back();
    }
}
