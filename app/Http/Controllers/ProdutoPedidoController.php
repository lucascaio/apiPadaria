<?php

namespace App\Http\Controllers;

use App\ProdutoPedido;
use Illuminate\Http\Request;

class ProdutoPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProdutoPedido::paginate();
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
        $produtoPedido = new ProdutoPedido($request->all());
        $produtoPedido->save();

        return response()->json(compact('produtoPedido'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProdutoPedido  $produtoPedido
     * @return \Illuminate\Http\Response
     */
    public function show(ProdutoPedido $produtoPedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProdutoPedido  $produtoPedido
     * @return \Illuminate\Http\Response
     */
    public function edit(ProdutoPedido $produtoPedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProdutoPedido  $produtoPedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProdutoPedido $produtoPedido)
    {
        $produtoPedido->produto_id = $request->produto_id;
        $produtoPedido->pedido_id = $request->pedido_id;
        $produtoPedido->save();

        return response()->json(compact('produtoPedido'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProdutoPedido  $produtoPedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProdutoPedido $produtoPedido)
    {
        $produtoPedido->delete();

        return response()->json(['status' => true, 'message' => 'O produto foi deletado.']);
    }
}
