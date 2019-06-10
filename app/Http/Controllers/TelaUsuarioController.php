<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichaExercicio;
use App\Ficha;
use App\UltimoTreino;
use App\User;
use App\InstrutorAluno;
use Auth;

use App\Helpers\CPFHelper;
use App\Helpers\DataHelper;

class TelaUsuarioController extends Controller
{
    protected $fichaExercicio;
    protected $ficha;
    protected $user;
    protected $ultimoTreino;
    protected $instrutorAluno;

    public function __construct(FichaExercicio $fichaExercicio, Ficha $ficha, User $user, UltimoTreino $ultimoTreino, InstrutorAluno $instrutorAluno)
    {
        $this->fichaExercicio = $fichaExercicio;
        $this->ficha = $ficha;
        $this->user = $user;
        $this->ultimoTreino = $ultimoTreino;
        $this->instrutorAluno = $instrutorAluno;
    }

    public function ficha(Request $request)
    {   
        $ficha = $this->ficha->where('user_id', Auth::id())->first();
        if($ficha == null) {
            return redirect('aluno/perfil')->with([
                'message' => [
                    'content' => 'Sua ficha ainda não foi criada, fale com seu instrutor',
                    'type' => 'danger',
                ]
            ]);
        }

        $ultimoTreino = $this->ultimoTreino->where('ficha_id', $ficha->id)->orderBy('created_at', 'desc')->first();
        if($ultimoTreino != null) {

            $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', $ultimoTreino->treino_id + 1)->get();
            if(count($treino) == 0) {
                $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', 1)->get();
            }
        } else {
            $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', 1)->get();
        }


        if($request->treino) {
            $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', $request->treino)->get();
            if(count($treino) == 0) {
                return redirect()->back();
            }
        }

        $treinoDeHoje = $treino->first()->treino;

        $sequencia = \DB::select('SELECT DISTINCT treinos.treino
            FROM ficha_exercicios 
            JOIN treinos on treinos.id = ficha_exercicios.treino_id 
            WHERE ficha_id = '.$ficha->id);
    

    	return view('site.ficha-aluno', [
            'ficha' => $ficha,
            'treino' => $treino,
            'treinoDeHoje' => $treinoDeHoje,
            'sequencia' => $sequencia,
        ]);
    }

    public function perfilInstrutor(Request $request)
    {
        $alunos = User::where('tipo', 'default')->get();
        $instrutores = User::where('tipo', 'instrutor')->get();
        if($request->aluno) {
            $alunos = User::where('tipo', 'default')->where('name', 'like', '%'.$request->aluno.'%')->get();
        }
        $alunos = $alunos->where('instrutor.instrutor_id', Auth::id());

        $totalAlunos = count($alunos);
        $instrutor = $this->user->find(Auth::id());
    	return view('site.perfilinstrutor', [
            'alunos' => $alunos,
            'instrutores' => $instrutores,
            'instrutor' => $instrutor,
            'totalAlunos' => $totalAlunos,
        ]);
    }

    public function formSenha()
    {
        return view('site.cadastrasenha');
    }

    public function cadastraSenha(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = $this->user->find(Auth::id());
 
        $user->update([
            'password' => bcrypt($request->password),
            'novo_usuario' => 0,
        ]);

        if($user->isDefault()) {
            return redirect('/aluno/perfil');
        }

        if($user->isInstrutor()) {
            return redirect('/instrutor/perfil');
        }
    }

    public function sobreNos()
    {
        return view('layouts.sobrenos');
    }
    public function perfilNovo(Request $request)
    {
        $aluno = $this->user->find(Auth::id());
        $ficha = $this->ficha->where('user_id', Auth::id())->first();

        if(!is_null($ficha)) {          
            $treinos = $this->ultimoTreino->where('ficha_id', $ficha->id)->orderBy('created_at', 'desc')->get();
        } else {
            $treinos = null;
        }
        return view('site.perfilnovo', [
            'aluno' => $aluno,
            'treinos' => $treinos
        ]);
    }

    public function fotoPerfil(Request $request)
    {
        $upload = $request->imagem->store('perfil');
        $user = $this->user->find(Auth::id());
        $user->imagem = $upload;
        $user->save();

        return redirect()->back();
    }

    public function cadastraAluno(Request $request)
    {
        $request->validate([
            'name' => 'required|min:6|max:191',
            // 'name' => 'regex:/^[a-zA-Z ]+$/|required|min:6|max:191',
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

    public function setUltimoTreino(Request $request)
    {
        $treino = $request->treino;
        $ficha = $request->ficha;
        $ultimoTreino = $this->ultimoTreino->create([
            'ficha_id' => $ficha,
            'treino_id' => $treino,
        ]);
        return redirect()->back();
    }

    public function fichaAPI(Request $request)
    {   
 
        $ficha = $this->ficha->where('user_id', Auth::id())->first();
        if(is_null($ficha)) {

            $res = array();

            $res['novo_usuario'] = Auth::user()->novo_usuario;
            $res['ficha'] = $ficha;
            $res['treino'] = null;
            $res['treinoDeHoje'] = null;
            $res['sequencia'] = null;
            $res['instrutor'] = null;
            $res['instrutor_imagem'] = null;

            return $res;
        }

        $ultimoTreino = $this->ultimoTreino->where('ficha_id', $ficha->id)->orderBy('created_at', 'desc')->first();

        if($ultimoTreino != null) {

            $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', $ultimoTreino->treino_id + 1)->get();
            if(count($treino) == 0) {
                $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', 1)->get();
            }
        } else {
            $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', 1)->get();
        }

        if($request->query('treino')) {
            $treino = $this->fichaExercicio->where('ficha_id', $ficha->id)->where('treino_id', $request->query('treino'))->get();
            if(count($treino) == 0) {
                return redirect()->back();
            }
        }

        // dd($ficha->created_at);
        $ficha->created_at_formatado = DataHelper::pegaDataDeDateTime($ficha->created_at);
        $ficha->revisao_formatado = DataHelper::formataData($ficha->revisao);

        $arrayTreino = $treino->toArray();
        foreach($treino as $key => $value) {
            $arrayTreino[$key]['exercicio'] = $value->exercicio;
            $arrayTreino[$key]['imagem'] = $value->exercicio->tipo_exercicio->imagem;
        }

        $treinoDeHoje = $treino->first()->treino;

        $sequencia = \DB::select('SELECT DISTINCT treinos.treino
            FROM ficha_exercicios 
            JOIN treinos on treinos.id = ficha_exercicios.treino_id 
            WHERE ficha_id = '.$ficha->id);
    
        $res = array();

        $res['novo_usuario'] = Auth::user()->novo_usuario;
        $res['ficha'] = $ficha;
        $res['treino'] = $arrayTreino;
        $res['treinoDeHoje'] = $treinoDeHoje;
        $res['sequencia'] = $sequencia;
        $res['instrutor'] = $ficha->ficha_instrutor->instrutor->name;
        $res['instrutor_imagem'] = $ficha->ficha_instrutor->instrutor->imagem;

        return $res;

    }

    public function perfilAPI()
    {
        $aluno = $this->user->find(Auth::id());
        $ficha = $this->ficha->where('user_id', Auth::id())->first();

        if(!is_null($ficha)) {          
            $treinos = $this->ultimoTreino->where('ficha_id', $ficha->id)->orderBy('created_at', 'desc')->get();
        } else {
            $treinos = null;
        }

        $arrayTreinos = $treinos->toArray();
        foreach($treinos as $key => $value) {
            $arrayTreinos[$key]['treino'] = $value->treino;
            $arrayTreinos[$key]['data'] = DataHelper::pegaDataDeDateTime($value->created_at);
        }

        $aluno->proxima_avaliacao_formatado = DataHelper::formataData($aluno->proxima_avaliacao);
        $aluno->nomeDoInstrutor = $aluno->instrutor->instrutor->name;

        $res = array();
        $res['aluno'] = $aluno;
        $res['treinos'] = $arrayTreinos;

        return $res;
    }

    public function fotoPerfilAPI(Request $request)
    {
        // dd($request->all());
        $upload = $request->imagem->store('perfil');
        $user = $this->user->find(Auth::id());
        $user->imagem = $upload;
        $user->save();
    }



    public function setUltimoTreinoAPI(Request $request)
    {
        $treino = $request->treino;
        $ficha = $request->ficha;
        $ultimoTreino = $this->ultimoTreino->create([
            'ficha_id' => $ficha,
            'treino_id' => $treino,
        ]);
    }

    public function cadastraSenhaAPI(Request $request)
    {
        // $request->validate([
        //     'password' => 'required|string|min:6|confirmed'
        // ]);

        $validador = \Validator::make($request->all(), 
        [
            'password' => 'required|string|min:6'
        ]);

        if($validador->passes()) {
            $user = Auth::user();
     
            $user->update([
                'password' => bcrypt($request->password),
                'novo_usuario' => 0,
            ]);
            return $success = 1;
        } else {
            $array = array();
            $error = $validador->messages()->first();
            $array['error'] = $error;
            return $array;
        }
    }

}

