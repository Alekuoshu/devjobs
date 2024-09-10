<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CandidatoStatus extends Component
{
    public $candidato;

    public function mount($candidato)
    {
        $this->candidato = $candidato;
    }

    public function updateStatus()
    {
        $this->candidato->status = 1;
        $this->candidato->save();
    }

    public function render()
    {
        return view('livewire.candidato-status');
    }
}
