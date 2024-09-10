<?php

namespace App\Http\Livewire;

use App\Notifications\NuevoCandidato;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    public $cv;
    public $vacante;

    use WithFileUploads;

    protected $rules = [
        'cv' => 'required|mimes:pdf|max:2048'
    ];

    public function postularme()
    {
        $datos = $this->validate();

        if ($this->vacante->hasUserApplied(auth()->user())) {
            session()->flash('candidato_error', 'Ya te has postulado a esta vacante anteriormente.');
            return redirect()->back();
        } else {
            // Almacenar el cv
            $cv = $this->cv->store('public/cv');
            $nombre_cv = str_replace('public/cv/', '', $cv);

            // Crear el candidato
            $this->vacante->candidatos()->create([
                'user_id' => auth()->user()->id,
                'cv' => $nombre_cv
            ]);

            // Envia la notificación
            $this->vacante->reclutador->notify(new NuevoCandidato($this->vacante->id, $this->vacante->titulo, auth()->user()->id));

            // Crear mensaje flash
            session()->flash('candidato_success', 'Su información fue enviada correctamente, mucha suerte.');

            return redirect()->back();
        }
    }
    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
