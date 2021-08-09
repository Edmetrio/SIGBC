<?php

namespace App\Http\Livewire;

use App\Models\Models\automovel;
use App\Models\Models\combustivel;
use App\Models\Models\empresa;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Venda extends Component
{

    public $empresa;
    public $automovel;
    public $combustivel;

    public $selectedEmpresa = NULL;
    public $selectedAutomovel = NULL;

    public function mount()
    {
        $this->empresa = empresa::all();
        $this->automovel = collect();
        $this->combustivel = collect();
    }

    public function render()
    {
        return view('livewire.venda');
    }

    public function updatedSelectedEmpresa($empresa)
    {
        if(!is_null($empresa))
        {
            $this->automovel = automovel::where('empresa_id', $empresa)->get();
        }
    }

    public function updatedSelectedAutomovel($automovel)
    {
        if(!is_null($automovel))
        {
            /* $this->combustivel = automovel::where('id', $automovel)->get(); */
             
            $this->combustivel = DB::table('automovel')
            ->join('combustivel', 'automovel.combustivel_id', 'combustivel.id')
            ->join('unidade', 'combustivel.unidade_id', 'unidade.id')
            ->where('automovel.id', $automovel)
            ->select('automovel.*', 'combustivel.nome as combnome', 'unidade.nome as uninome')
            ->get(); 
            
        }
    }

    public function create()
    {
        dd($this->quantidade);
    }
}
