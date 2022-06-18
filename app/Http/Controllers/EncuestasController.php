<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use App\Models\Encuestas;
use App\Http\Controllers\Controller;
use App\Models\Personas;
use Illuminate\Http\Request;

class EncuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_encuestas=Encuestas::join("docentes","encuestas.id_docente","docentes.id_docente")
            ->join("personas","docentes.id_persona","personas.id_persona")
            ->select("encuestas.*","personas.nombre")
            ->get();

        $datos_personas=Personas::all();
        $datos_docentes=Docentes::all();
        return view("encuestas.index",compact("datos_encuestas","datos_personas","datos_docentes"));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function show(Encuestas $encuesta)
    {
        $encuesta=$encuesta::join("docentes","encuestas.id_docente","docentes.id_docente")
            ->join('personas','docentes.id_persona','personas.id_persona')
            ->whereIdEncuesta($encuesta->id_encuesta)
            ->select('encuestas.id_encuesta','personas.nombre')
            ->first();
        //dd($docente);
        return back()->with(["modal_delete"=>true,"delete_encuesta"=>$encuesta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(Encuestas $encuesta)
    {
        return back()->with(["modal_edit"=>true,"edit_encuesta"=>$encuesta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encuestas $encuesta)
    {
        $encuesta->update($request->all());
        return redirect('encuestas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Encuestas  $encuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Encuestas $encuesta)
    {
        $encuesta->delete();
        return redirect('encuestas');
    }
}
