<?php

namespace App\Http\Controllers;

use App\Models\Models\individual;
use App\Models\Models\utilizador;
use Illuminate\Http\Request;

class ClieIndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilizador = utilizador::where('categoria_id', 2)->get();
        return view('Cliente-Individual', compact('utilizador'));
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
        /* return $request->input(); */
        $individual = individual::create([
            'utilizador_id' => $request->utilizador_id,
            'endereco' => $request->endereco,
            'bi' => $request->bi,
            'estado' => 0
        ]);
        if($individual)
        {
            $request->session()->flash('status', 'Individual Adicionada!');
            return redirect('clieindividual');
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
