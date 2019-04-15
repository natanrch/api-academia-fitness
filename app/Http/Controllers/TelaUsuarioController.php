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

    public function perfilUsuario(Request $request)
    {   
        $ficha = $this->ficha->where('user_id', Auth::id())->first();
        if($ficha == null) {
            return 'usuário não possui ficha cadastrada';
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
    

    	return view('site.perfilaluno', [
            'ficha' => $ficha,
            'treino' => $treino,
            'treinoDeHoje' => $treinoDeHoje,
            'sequencia' => $sequencia,
        ]);
    }

    public function perfilInstrutor()
    {
        $users = User::where('tipo', 'default')->get();
        $instrutores = User::where('tipo', 'instrutor')->get();
    	return view('site.perfilinstrutor', [
            'users' => $users,
            'instrutores' => $instrutores,
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

        return redirect('/perfil');
    }

    public function adm()
    {
        $instrutores = $this->user->where('tipo', 'instrutor')->get();
        return view('site.perfil-adm', [
            'instrutores' => $instrutores,
        ]);
    }

    public function sobreNos()
    {
        return view('layouts.sobrenos');
    }
     public function Perfilnovo()
    {
        return view('site.perfilnovo');
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

