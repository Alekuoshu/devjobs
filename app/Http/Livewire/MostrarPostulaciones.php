<?php

namespace App\Http\Livewire;

use App\Models\Candidato;
use App\Models\Vacante;
use Livewire\Component;

class MostrarPostulaciones extends Component
{
    public function render()
    {
        $candidato = Candidato::find(auth()->user()->id);
        $vacantesPostuladas = $candidato->vacantesPostuladas()
            ->orderBy('candidatos.created_at', 'desc')
            ->paginate(10);

        return view('livewire.mostrar-postulaciones', [
            'vacantes' => $vacantesPostuladas
        ]);
    }
}
