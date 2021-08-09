<?php

namespace App\Http\Controllers;

use App\Models\Models\contrato;
use App\Models\Models\empresa;
use App\Models\Models\pagamento;
use Illuminate\Http\Request;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagamento = pagamento::all();
        $empresa = empresa::all();
        return view('contrato', compact('pagamento','empresa'));
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
        $contrato = contrato::create([
            'empresa_id' => $request->empresa_id,
            'pagamento_id' => $request->pagamento_id,
            'datainicio' => $request->datainicio,
            'vencimento' => $request->vencimento,
            'datapagamento' => $request->datapagamento,
            'saldo' => $request->saldo,
            'estado' => 0
        ]);
        if($contrato)
        {
            $request->session()->flash('status', 'Empresa Adicionada!');
            return redirect('contrato');
        }
        else
        {
            $request->session()->flash('status', 'Empresa Adicionada!');
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
