<?php

namespace App\Http\Controllers;

use App\Models\Models\combustivel;
use App\Models\Models\vendaempresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $historico= DB::table('vendaempresa')
        ->join('automovel', 'vendaempresa.automovel_id', '=', 'automovel.id')
        ->join('combustivel', 'automovel.combustivel_id', '=', 'combustivel.id')
        ->join('utilizador', 'vendaempresa.utilizador_id', '=', 'utilizador.id')
    
        ->select('vendaempresa.*', 'combustivel.nome as combnome', 'automovel.matricula as autmat', 'utilizador.nome as utinome')
        ->get();
        $numero = vendaempresa::all()->count();
        return view('historico', compact('historico','numero'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
