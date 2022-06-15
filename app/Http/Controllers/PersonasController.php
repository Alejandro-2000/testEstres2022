<?php

namespace App\Http\Controllers;

use App\Models\GradoAcademico;
use App\Models\Personas;
use App\Models\Sexo;
use Illuminate\Http\Request;
use App\Models\EstadoCivil;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_personas=Personas::join("estado_civil","personas.id_estadocivil","estado_civil.id")
            ->join("sexo","personas.id_sexo","sexo.id")
            ->join("grado_acad","personas.id_gradoacad","grado_acad.id")
            ->select("personas.*","estado_civil.descripcion","grado_acad.enunciado","sexo.descripcion_sexo")
            ->get();

        $datos_estado_civil=EstadoCivil::all();
        $datos_gradoacad=GradoAcademico::all();
        $datos_sexo=Sexo::all();
        //dd($datos_personas);
        return view("personas.index",compact("datos_personas","datos_estado_civil","datos_sexo","datos_gradoacad"));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $persona)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $persona)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $persona)
    {
        //
    }
}
