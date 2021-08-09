<?php

namespace App\Http\Controllers;

use App\Models\Models\automovel;
use App\Models\Models\combustivel;
use App\Models\Models\empresa;
use App\Models\Models\unidade;
use Illuminate\Http\Request;

class ClieAutomovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = empresa::all()->sortBy('id');
        $combustivel = combustivel::all();
        $unidade = unidade::all();
        return view('Cliente-Automovel', compact('empresa','combustivel','unidade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $automovel = automovel::create([
            'empresa_id' => $request->empresa_id,
            'combustivel_id' =>$request->combustivel_id,
            'matricula' => $request->matricula,
            'quantidade' => $request->quantidade,
            'estado' => 0
        ]);
        if($automovel)
        {
            $request->session()->flash('status', 'Automóvel Adicionado!');
            return redirect('clieautomovel');
        }
        else 
        {
            $request->session()->flash('status', 'Erro ao Adicionada!');
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
