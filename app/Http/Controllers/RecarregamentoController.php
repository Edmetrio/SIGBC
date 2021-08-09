<?php

namespace App\Http\Controllers;

use App\Models\Models\Recarregamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RecarregamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recarregamento = DB::table('individual')
        ->join('utilizador', 'individual.utilizador_id', '=', 'utilizador.id')
        ->get();
        
        return view('recarregamento', compact('recarregamento'));
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
        $recarregamento = Recarregamento::create([
            'individual_id' => $request->individual_id,
            'valor' => $request->valor
        ]);
        if($recarregamento)
        {
            $request->session()->flash('status', 'Cartão Recarregado!');
            return redirect('recarregamento');
        }
        else 
        {
            $request->session()->flash('status', 'Erro ao Recarregar!');
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
