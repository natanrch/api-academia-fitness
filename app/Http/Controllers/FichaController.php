<?php

namespace App\Http\Controllers;

use App\Ficha;
use App\FichaExercicio;
use App\Exercicio;
use App\TipoExercicio;
use Illuminate\Http\Request;
use Session;

class FichaController extends Controller
{

    protected $ficha;
    protected $fichaExercicio;
    protected $exercicio;
    protected $tipoExercicio;

    public function __construct(Ficha $ficha, FichaExercicio $fichaExercicio, Exercicio $exercicio, TipoExercicio $tipoExercicio)
    {

        $this->exercicio = $exercicio;
        $this->ficha = $ficha;
        $this->fichaExercicio = $fichaExercicio;
        $this->tipoExercicio = $tipoExercicio;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Session::put([
            'user_id' => $request->user,
        ]);

        $ficha = $this->ficha->where('user_id', $request->user)->first();
        if(!is_null($ficha)) {
            return redirect('/ficha/'.$request->user);
        }

        $exercicios = $this->exercicio->all()->sortBy('tipo_exercicio_id');
        $tipos = $this->tipoExercicio->all()->sortBy('titulo');

        return view('ficha.create', [
            'exercicios' => $exercicios,
            'tipos' => $tipos,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ficha = $this->ficha->create([
            'user_id' => session('user_id'),
            'dias_de_treinamento' => $request->dias,
            'objetivo' => $request->objetivo,
            'metodo' => $request->metodo,
            'aquecimento' => $request->aquecimento,
            'fichaExercicio_aerobico' => $request->aerobico,
            'observacoes' => $request->observacoes,
        ]);
        foreach($request->exercicio as $i => $exercicio) {
            if(!is_null($request->treino[$i])) {

                $this->fichaExercicio->create([
                    'ficha_id' => $ficha->id,
                    'exercicio_id' => $exercicio,
                    'repeticoes' => $request->repeticoes[$i],
                    'series' => $request->series[$i],
                    'peso' => $request->peso[$i],
                    'treino' => $request->treino[$i],
                ]);
            }
        }
        return redirect('/ficha/'.session('user_id'));
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        return view('ficha.ficha', [
            'ficha' => $ficha,
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        //
    }
}
