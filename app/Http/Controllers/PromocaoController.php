<?php

namespace App\Http\Controllers;

use App\Promocao;
use Illuminate\Http\Request;

class PromocaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Promocao::paginate();
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
        $promocao = new Promocao($request->all());
        $promocao->save();

        return response()->json(compact('promocao'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function show(Promocao $promocao)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function edit(Promocao $promocao)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promocao $promocao)
    {
        $promocao->tempo_vigente = $request->tempo_vigente;
        $promocao->desconto = $request->desconto;
        $promocao->produto_id = $request->produto_id;
        $promocao->save();

        return response()->json(compact('promocao'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Promocao  $promocao
     * @return \Illuminate\Http\Response
     */
    public function destroy(Promocao $promocao)
    {
        $promocao->delete();

        return response()->json(['status' => true, 'message' => 'A promocao foi deletada.']);
    }
}
