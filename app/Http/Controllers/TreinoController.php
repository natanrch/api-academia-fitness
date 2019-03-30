<?php

namespace App\Http\Controllers;

use App\ProgramaDeTreinamento;
use App\Exercicio;
use App\FichaExercicio;
use App\TipoExercicio;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    protected $programaDeTreinamento;
    protected $exercicio;
    protected $programaExercicio;
    protected $tipoExercicio;

    public function __construct(ProgramaDeTreinamento $programaDeTreinamento, Exercicio $exercicio, ProgramaExercicio $programaExercicio, TipoExercicio $tipoExercicio)
    {
        $this->programaDeTreinamento = $programaDeTreinamento;
        $this->exercicio = $exercicio;
        $this->programaExercicio = $programaExercicio;
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
    public function create()
    {
        $exercicios = $this->exercicio->all()->sortBy('tipo_exercicio_id');
        $tipos = $this->tipoExercicio->all()->sortBy('titulo');
        return view('treino.create2', [
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
        $programaDeTreinamento = $this->programaDeTreinamento->create([
            'titulo' => $request->titulo,
            'user_id' => 1,
        ]);
        foreach($request->exercicio as $i => $exercicio) {
            if($exercicio > 0) {

                $this->programaExercicio->create([
                    'programa_de_treinamento_id' => $programaDeTreinamento->id,
                    'exercicio_id' => $exercicio,
                    'repeticoes' => $request->repeticoes[$i],
                    'series' => $request->series[$i],
                    'peso' => $request->peso[$i],
                ]);
            }
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProgramaDeTreinamento  $programaDeTreinamento
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramaDeTreinamento $programaDeTreinamento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProgramaDeTreinamento  $programaDeTreinamento
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramaDeTreinamento $programaDeTreinamento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProgramaDeTreinamento  $programaDeTreinamento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramaDeTreinamento $programaDeTreinamento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProgramaDeTreinamento  $programaDeTreinamento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramaDeTreinamento $programaDeTreinamento)
    {
        //
    }
}
