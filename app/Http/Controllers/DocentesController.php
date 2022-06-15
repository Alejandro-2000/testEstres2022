<?php

namespace App\Http\Controllers;

use App\Models\Docentes;
use App\Http\Controllers\Controller;
use App\Models\Personas;
use App\Models\ProgramaEstudio;
use Illuminate\Http\Request;

class DocentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_docentes=Docentes::join("personas","docentes.id_persona","personas.id_persona")
            ->join("programa_estudios","docentes.id_programa","programa_estudios.id_programa")
            ->select("docentes.*","personas.nombre","programa_estudios.descripcion_carrera")
            ->get();
//$datos_docentes=Docentes::all();
        $datos_personas=Personas::all();
        $datos_programa=ProgramaEstudio::all();
        //dd($datos_personas);
        return view("docentes.index",compact("datos_docentes","datos_personas","datos_programa"));
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
        Docentes::create([
            'id_persona'=>$request->id_persona,
            'id_programa'=>$request->id_carrera,
        ]);
        return redirect()->route('docentes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function show(Docentes $docente)
    {
        return back()->with(["modal_delete"=>true,"delete_docente"=>$docente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Docentes $docente)
    {
        return back()->with(["modal_edit"=>true,"edit_docente"=>$docente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Docentes $docente)
    {
        $docente->update($request->all());
        return redirect('docentes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Docentes  $docentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Docentes $docente)
    {
        $docente->delete();
        return redirect('docentes');
    }
}
