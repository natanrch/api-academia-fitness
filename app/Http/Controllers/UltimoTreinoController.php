<?php

namespace App\Http\Controllers;

use App\UltimoTreino;
use Illuminate\Http\Request;

class UltimoTreinoController extends Controller
{

    protected $ultimoTreino;

    public function __construct(UltimoTreino $ultimoTreino)
    {
        $this->ultimoTreino = $ultimoTreino;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\UltimoTreino  $ultimoTreino
     * @return \Illuminate\Http\Response
     */
    public function show(UltimoTreino $ultimoTreino)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UltimoTreino  $ultimoTreino
     * @return \Illuminate\Http\Response
     */
    public function edit(UltimoTreino $ultimoTreino)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UltimoTreino  $ultimoTreino
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UltimoTreino $ultimoTreino)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UltimoTreino  $ultimoTreino
     * @return \Illuminate\Http\Response
     */
    public function destroy(UltimoTreino $ultimoTreino)
    {
        //
    }
}
