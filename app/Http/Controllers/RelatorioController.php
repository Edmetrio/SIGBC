<?php

namespace App\Http\Controllers;

use App\Models\Models\vendaempresa;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    
    public function venda()
    {
        $historico= DB::table('vendaempresa')
        ->join('automovel', 'vendaempresa.automovel_id', '=', 'automovel.id')
        ->join('combustivel', 'automovel.combustivel_id', '=', 'combustivel.id')
        ->join('unidade', 'combustivel.unidade_id', '=', 'unidade.id')
        ->join('utilizador', 'vendaempresa.utilizador_id', '=', 'utilizador.id')
        ->join('empresa', 'automovel.empresa_id', '=', 'empresa.id')
        ->select('vendaempresa.*', 'combustivel.nome as combnome', 'automovel.matricula as autmat', 
                'utilizador.nome as utinome', 'unidade.nome as uninome', 'empresa.nome as emnome')
        ->get();
        $numero = vendaempresa::all()->count();
        return view('Relatorio-venda', compact('historico','numero'));
    }

}
