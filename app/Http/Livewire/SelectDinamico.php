<?php

namespace App\Http\Livewire;

use App\Models\Competencia;
use App\Models\Resultado;
use Livewire\Component;

class SelectDinamico extends Component
{
    public $selected = "";
    public $resultados = [];

    protected $listeners = ['searchHouses' => 'searchHouses'];

    public function render()
    {
        $competencias = Competencia::all();
        return view('livewire.select-dinamico', compact("competencias"));
    }

    public function mout($selected)
    {
        $this->selected = $selected;
    }

    public function searchHouses()
    {
        $this->resultados = Resultado::where("competencia_id", $this->selected)->get();
    }
}
