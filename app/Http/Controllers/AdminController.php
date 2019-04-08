<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InstrutorAluno;

class AdminController extends Controller
{
	protected $user;
    protected $instrutorAluno;

	public function __construct(User $user, InstrutorAluno $instrutorAluno)
	{
		$this->user = $user;
        $this->instrutorAluno = $instrutorAluno;
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
        $upload = $request->avaliacao->store('avaliacoes');
        
        $user = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $request->cpf,
            'password' => bcrypt($request->password),
            'tipo' => 'default',
            'data_de_nascimento' => $request->nascimento,
            'data_de_pagamento' => $request->pagamento,
            'modalidade' => $request->modalidade,
            'avaliacao' => $upload,
            'novo_usuario' => 1,
        ]);

        $instrutorAluno = $this->instrutorAluno->create([
            'aluno_id' => $user->id,
            'instrutor_id' => $request->instrutor,
            'status' => 'sem_ficha',
        ]);

        return redirect()->back();
    }
}
