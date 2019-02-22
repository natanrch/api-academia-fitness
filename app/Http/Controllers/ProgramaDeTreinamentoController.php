<?php

namespace App\Http\Controllers;

use App\ProgramaDeTreinamento;
use App\Exercicio;
use App\ProgramaExercicio;
use App\TipoExercicio;
use Illuminate\Http\Request;

class ProgramaDeTreinamentoController extends Controller
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
        return view('ficha.create-programa', [
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
        dd($request);
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
