<?php

namespace App\Http\Controllers;

use App\Models\Models\automovel;
use App\Models\Models\combustivel;
use App\Models\Models\empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClieEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cliente-Empresa');
    }

    public function lista()
    {
        $automovel= DB::table('automovel')
        ->join('combustivel', 'automovel.combustivel_id', 'combustivel.id')
        ->join('unidade', 'combustivel.unidade_id', 'unidade.id')
        ->select('automovel.*', 'unidade.nome as uninome', 'combustivel.nome as combnome')
        ->get();
        return view('cliente', compact('automovel'));
    }

    public function ClientesEmpresa()
    {
        $empresa = empresa::all();

        return view('Clientes-Empresa', compact('empresa'));
    }

    public function automovel()
    {
        $automovel= DB::table('automovel')
        ->join('combustivel', 'automovel.combustivel_id', 'combustivel.id')
        ->join('unidade', 'combustivel.unidade_id', 'unidade.id')
        ->join('empresa', 'automovel.empresa_id', 'empresa.id')
        ->select('automovel.*', 'unidade.nome as uninome', 'combustivel.nome as combnome', 'empresa.nome as empnome')
        ->get();
        /* dd($automovel); */
        return view('automovel', compact('automovel'));
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
        $empresa = empresa::create([
            'utilizador_id' => $request->utilizador_id,
            'nome' => $request->nome,
            'contacto' => $request->contacto,
            'email' => $request->email,
            'endereco' => $request->endereco
        ]);
        if($empresa)
        {
            $request->session()->flash('status', 'Empresa Adicionada!');
            return redirect('contrato');
        }
        else {
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
