<?php

namespace App\Http\Controllers;

use App\Exercicio;
use App\FichaExercicio;
use App\TipoExercicio;
use Illuminate\Http\Request;

class TreinoController extends Controller
{

    protected $exercicio;
    protected $fichaExercicio;
    protected $tipoExercicio;

    public function __construct(Exercicio $exercicio, FichaExercicio $fichaExercicio, TipoExercicio $tipoExercicio)
    {
        $this->exercicio = $exercicio;
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

        foreach($request->exercicio as $i => $exercicio) {
            if($exercicio > 0) {

                $this->fichaExercicio->create([
                    'exercicio_id' => $exercicio,
                    'repeticoes' => $request->repeticoes[$i],
                    'series' => $request->series[$i],
                    'peso' => $request->peso[$i],
                ]);
            }
        }
        return redirect()->back();
    }

    public function show()
    {
        //
    }


    public function edit()
    {
        //
    }


    public function update(Request $request, )
    {
        //
    }

    public function destroy()
    {
        //
    }
}
