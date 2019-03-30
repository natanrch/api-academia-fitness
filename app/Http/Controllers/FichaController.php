<?php

namespace App\Http\Controllers;

use App\Ficha;
use App\ProgramaDeTreinamento;
use Illuminate\Http\Request;
use Session;

class FichaController extends Controller
{

    protected $ficha;
    protected $programaDeTreinamento;

    public function __construct(Ficha $ficha, ProgramaDeTreinamento $programaDeTreinamento)
    {
        $this->ficha = $ficha;
        $this->programaDeTreinamento = $programaDeTreinamento;
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
        return view('ficha.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $ficha = $this->ficha->create([
        //     'user_id' => session('user_id'),
        //     'dias_de_treinamento' => $request->dias,
        //     'objetivo' => $request->objetivo,
        //     'metodo' => $request->metodo,
        //     'aquecimento' => $request->aquecimento,
        //     'treino_aerobico' => $request->aerobico,
        //     'observacoes' => $request->observacoes,
        // ]);
        return redirect('/treino/create');
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
