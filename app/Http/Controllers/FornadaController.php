<?php

namespace App\Http\Controllers;

use App\Fornada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FornadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Fornada::paginate();
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
        $fornada = new Fornada($request->all());
        $fornada->save();

        return response()->json(compact('fornada'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fornada  $fornada
     * @return \Illuminate\Http\Response
     */
    public function show(Fornada $fornada)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fornada  $fornada
     * @return \Illuminate\Http\Response
     */
    public function edit(Fornada $fornada)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fornada  $fornada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fornada $fornada)
    {
        $fornada->data_inicio = $request->data_inicio;
        $fornada->data_fim = $request->data_fim;
        $fornada->save();

        return response()->json(compact('fornada'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fornada  $fornada
     * @return \Illuminate\Http\Response
     */

    public function destroy(Fornada $fornada)
    {
        $fornada->delete();

        return response()->json(['status' => true, 'message' => 'A fornada foi deletada.']);
    }

    public function lastFornada(){
//        $fornada = DB::table('fornadas')->first();
        $fornada = DB::table('fornadas')
            ->orderByRaw('id DESC')
            ->first();

        return response()->json(compact('fornada'));
    }
}
