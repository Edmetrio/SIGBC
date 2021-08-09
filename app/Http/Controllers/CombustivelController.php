<?php

namespace App\Http\Controllers;

use App\Models\Models\combustivel;
use App\Models\Models\unidade;
use Illuminate\Http\Request;

class CombustivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidade = unidade::all();
        return view('combustivel', compact('unidade'));
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
        $combustivel = combustivel::create([
            'unidade_id' => $request->unidade_id,
            'nome' => $request->nome,
            'estado' => 0
        ]);
        if($combustivel)
        {
            $request->session()->flash('status', 'Combustivel Adicionado!');
            return redirect('combustivel');
        }
        else 
        {
            $request->session()->flash('status', 'Erro ao Adicionar!');
            return redirect('404');
        }
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
