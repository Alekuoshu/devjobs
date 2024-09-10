<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostulacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('viewAny', Vacante::class);

        return view('postulaciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Vacante $vacante)
    {
        // verificar si no esta logueado y asignar el redirect_url
        if (!Auth::check()) {
            session(['redirect_url' => url()->current()]);
        } else {
            session()->forget('redirect_url');
        }

        return view('vacantes.show', [
            'vacante' => $vacante
        ]);
    }
}
