<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithPagination;

class HomeVacantes extends Component
{
    public $termino;
    public $categoria;
    public $salario;

    use WithPagination;

    protected $listeners = ['terminoBusqueda' => 'buscar'];

    public function buscar($termino, $categoria, $salario)
    {
        $this->termino = $termino;
        $this->categoria = $categoria;
        $this->salario = $salario;
    }

    public function render()
    {
        // consultar la db
        // $vacantes = Vacante::orderByDesc('created_at')->paginate(10);

        $vacantes = Vacante::where(function ($query) {
            $query->where('titulo', 'LIKE', "%" . $this->termino . "%")
                ->orWhere('empresa', 'LIKE', "%" . $this->termino . "%");
        })->when($this->categoria, function ($query) {
            $query->where('categoria_id', $this->categoria);
        })->when($this->salario, function ($query) {
            $query->where('salario_id', $this->salario);
        })->orderBy('created_at', 'DESC')
            ->whereDate('ultimo_dia', '>', now())
            ->paginate(10);

        return view('livewire.home-vacantes', [
            'vacantes' => $vacantes
        ]);
    }
}
