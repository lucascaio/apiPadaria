<?php

namespace App\Http\Controllers;

use App\ProdutoTipo;
use Illuminate\Http\Request;

class ProdutoTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProdutoTipo::paginate();
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
        $produtoTipo = new ProdutoTipo($request->all());
        $produtoTipo->save();

        return response()->json(compact('produtoTipo'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProdutoTipo  $produtoTipo
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutoTipo $produtoTipo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProdutoTipo  $produtoTipo
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoTipo $produtoTipo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProdutoTipo  $produtoTipo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoTipo $produtoTipo)
    {
        $produtoTipo->nome = $request->nome;
        $produtoTipo->save();

        return response()->json(compact('produtoTipo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProdutoTipo  $produtoTipo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoTipo $produtoTipo)
    {
        $produtoTipo->delete();

        return response()->json(['status' => true, 'message' => 'O tipo de produto foi deletado.']);
    }
}
