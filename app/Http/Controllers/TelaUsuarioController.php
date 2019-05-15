<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FichaExercicio;
use App\Ficha;
use App\UltimoTreino;
use App\User;
use Auth;

class TelaUsuarioController extends Controller
{
    protected $fichaExercicio;
    protected $ficha;
    protected $user;
    protected $ultimoTreino;

    public function __construct(FichaExercicio $fichaExercicio, Ficha $ficha, User $user, UltimoTreino $ultimoTreino)
    {
        $this->fichaExercicio = $fichaExercicio;
        $this->ficha = $ficha;
        $this->user = $user;
        $this->ultimoTreino = $ultimoTreino;
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

    public function LoginApp()
    {
        return view('app.login-app');
    }

    public function PerfilApp()
    {
        return view('app.perfil-app');
    }
     public function FichaApp()
    {
        return view('app.ficha-app');
    }
}

