<?php

namespace App\Http\Controllers;

use App\Models\Models\automovel;
use App\Models\Models\empresa;
use App\Models\Models\utilizador;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automovel = DB::table('automovel')
            ->join('combustivel', 'automovel.combustivel_id', 'combustivel.id')
            ->join('unidade', 'combustivel.unidade_id', 'unidade.id')
            ->join('empresa', 'automovel.empresa_id', 'empresa.id')
            ->select('automovel.*', 'unidade.nome as uninome', 'combustivel.nome as combnome', 
                    'empresa.nome as emnome', 'empresa.endereco as empend')
            ->where('empresa.id', 'f6750ad1-a259-4d25-8f91-9fd55e04279a')
            ->get(); 
       
        $numero = automovel::where('empresa_id', 'f6750ad1-a259-4d25-8f91-9fd55e04279a')->count();
        
        /* $utilizador = utilizador::where('id', 'dafe4fcb-5bc4-4568-bb35-10813dec9715')->first(); */
        $utilizador = empresa::where('id', 'f6750ad1-a259-4d25-8f91-9fd55e04279a')->first();
        /* dd($utilizador); */
        return view('perfil', compact('utilizador','automovel','numero'));
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
