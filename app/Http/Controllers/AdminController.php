<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\InstrutorAluno;
use App\Helpers\CPFHelper;

class AdminController extends Controller
{
	protected $user;
    protected $instrutorAluno;

	public function __construct(User $user, InstrutorAluno $instrutorAluno)
	{
		$this->user = $user;
        $this->instrutorAluno = $instrutorAluno;
	}

    public function painel(Request $request)
    {
        $instrutores = $this->user->where('tipo', 'instrutor')->limit(5)->get();
        if($request->instrutor) {
            $instrutores = $this->user->where('tipo', 'instrutor')->where('name', 'like', '%'.$request->instrutor.'%')->get();
        }

        $alunos = $this->user->where('tipo', 'default')->limit(5)->get();
        if($request->aluno) {
            $alunos = $this->user->where('tipo', 'default')->where('name', 'like', '%'.$request->aluno.'%')->get();
        }

        $totalAlunos = count($alunos);
        $totalInstrutores = count($instrutores);
        return view('site.perfil-adm', [
            'instrutores' => $instrutores,
            'alunos' => $alunos,
            'totalAlunos' => $totalAlunos,
            'totalInstrutores' => $totalInstrutores
        ]);
    }

    public function cadastraInstrutor(Request $request)
    {

        $request->validate([
            // 'name' => 'required|min:6|max:191',
            'name' => 'regex:/^[a-zA-Z\u00C0-\u017F´]+\s+[a-zA-Z\u00C0-\u017F´]{0,}$/|required|min:6|max:191',
            'cpf' => 'cpf|required|unique:users',
            'email' => 'email|required|unique:users',
            'cref' => 'required|unique:users',
        ]);

    	$user = $this->user->create([
    		'name' => $request->name,
    		'email' => $request->email,
    		'cpf' => $request->cpf,
    		'password' => bcrypt('academiafitness'),
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
        $request->validate([
            // 'name' => 'required|min:6|max:191',
            'name' => 'regex:/^[a-zA-Z\u00C0-\u017F´]+\s+[a-zA-Z\u00C0-\u017F´]{0,}$/|required|min:6|max:191',
            'cpf' => 'cpf|required|unique:users',
            'email' => 'email|required|unique:users',
            'data_de_nascimento' => 'date',
            'pagamento' => 'numeric|min:1|max:31',
            'modalidade' => 'required',
            'instrutor' => 'required',
            'proxima_avaliacao' => 'nullable|after:today'
        ]);

        // dd($request->proxima_avaliacao);
        if($request->avaliacao) {
            $upload = $request->avaliacao->store('avaliacoes');
        } else {
            $upload = null;
        }

        $cpf = CPFHelper::somenteNumeros($request->cpf);
        
        $user = $this->user->create([
            'name' => $request->name,
            'email' => $request->email,
            'cpf' => $cpf,
            'password' => bcrypt('academiafitness'),
            'tipo' => 'default',
            'data_de_nascimento' => $request->nascimento,
            'data_de_pagamento' => $request->pagamento,
            'modalidade' => $request->modalidade,
            'avaliacao' => $upload,
            'novo_usuario' => 1,
            'proxima_avaliacao' => $request->proxima_avaliacao,
        ]);

        $instrutorAluno = $this->instrutorAluno->create([
            'aluno_id' => $user->id,
            'instrutor_id' => $request->instrutor,
            'status' => 'sem_ficha',
        ]);

        return redirect()->back()->with([
            'message' => [
                'content' => 'Aluno cadastrado com sucesso!',
                'type' => 'success',
            ]
        ]);
    }

    public function bloqueiaUsuario(Request $request)
    {
        $user = $this->user->find($request->id);
        $user->bloqueia();

        return redirect()->back()->with([
            'message' => [
                'content' => 'Usuário bloqueado com sucesso!',
                'type' => 'success',
            ]
        ]);
    }

    public function desbloqueiaUsuario(Request $request)
    {
        $user = $this->user->find($request->id);
        $user->desbloqueia();

        return redirect()->back()->with([
            'message' => [
                'content' => 'Usuário desbloqueado com sucesso!',
                'type' => 'success',
            ]
        ]);
    }

    public function reavaliar(Request $request)
    {
        $request->validate([
            'avaliacao' => 'file|required',
            'proxima_avaliacao' => 'date|required',
        ]);
        $user = $this->user->find($request->id);
        $upload = $request->avaliacao->store('avaliacoes');
        $user->reavalia($upload);

        return redirect()->back()->with([
            'message' => [
                'content' => 'Reavaliação realizada com sucesso!',
                'type' => 'success',
            ]
        ]);
    }
}
