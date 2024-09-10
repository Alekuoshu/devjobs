<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $dates = ['ultimo_dia'];

    protected $fillable = [
        'titulo',
        'salario_id',
        'categoria_id',
        'empresa',
        'ultimo_dia',
        'descripcion',
        'imagen',
        'user_id',
        'publicado',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function salario()
    {
        return $this->belongsTo(Salario::class);
    }

    /**
     * Relacion de uno a muchos con la tabla candidatos
     * Devuelve una coleccion de candidatos que se han postulado
     * a la vacante
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function candidatos()
    {
        return $this->hasMany(Candidato::class)->orderBy('created_at', 'desc');
    }

    public function reclutador()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Comprueba si un usuario ha aplicado a la vacante.
     *
     * @param User $user
     * @return bool
     */
    public function hasUserApplied(User $user): bool
    {
        return $this->candidatos()->where('user_id', $user->id)->exists();
    }


    /**
     * Obtiene la fecha de postulación del candidato.
     *
     * @param User $user
     * @return string
     */
    public function getFechaPostulacion(User $user): string
    {
        $candidato = $this->candidatos()->where('user_id', $user->id)->first();

        if (!$candidato) {
            return '';
        }

        return $candidato->created_at->diffForHumans();
    }
}
