<?php

namespace App\Http\Controllers;

use App\Anuncio;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class AnuncioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Anuncio::paginate();
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
        $anuncio = new Anuncio($request->all());
        $anuncio->save();

        return response()->json(compact('anuncio'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function show(Anuncio $anuncio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function edit(Anuncio $anuncio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anuncio $anuncio)
    {
        $anuncio->data_inicio = $request->data_inicio;
        $anuncio->data_fim = $request->data_fim;
        $anuncio->titulo_anuncio = $request->titulo_anuncio;
        $anuncio->descricao_anuncio = $request->descricao_anuncio;
        $anuncio->produto_id;
        $anuncio->save();

        return response()->json(compact('anuncio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Anuncio  $anuncio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anuncio $anuncio)
    {
        $anuncio->delete();

        return response()->json(['status' => true, 'message' => 'O anuncio foi deletado.']);
    }
}
