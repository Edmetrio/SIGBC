<?php

namespace App\Http\Controllers;

use App\Models\Models\automovel;
use App\Models\Models\empresa;
use App\Models\Models\unidade;
use App\Models\Models\vendaempresa;
use Illuminate\Http\Request;

class VendaEmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empresa = empresa::all();
        $matricula = automovel::all();
        $unidade = unidade::all();
        return view('venda-Empresa', compact('empresa','matricula','unidade'));
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

        /* return $request->input();
 */
        $empresa = vendaempresa::create([
            'automovel_id'=> $request->matricula_id,
            'utilizador_id' => $request->utilizador_id,
            'quantidade' => $request->quantidade
        ]);
        if($empresa)
        {
            $request->session()->flash('status', 'Venda Adicionada!');
            return redirect('vendaempresa');
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
