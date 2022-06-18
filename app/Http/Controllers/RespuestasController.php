<?php

namespace App\Http\Controllers;

use App\Models\Encuestas;
use App\Models\Preguntas;
use App\Models\Respuestas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RespuestasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_respuestas=Respuestas::join("encuestas","respuestas.id_encuesta","encuestas.id_encuesta")
            ->join("preguntas","respuestas.id_pregunta","preguntas.id_pregunta")
            ->select("respuestas.*","preguntas.enunciado_pregunta")
            ->get();
        $datos_preguntas=Preguntas::all();
        $datos_encuestas=Encuestas::all();
        return view("respuestas.index",compact("datos_respuestas","datos_encuestas","datos_preguntas"));
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
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function show(Respuestas $respuesta)
    {
        return back()->with(["modal_delete"=>true,"delete_respuesta"=>$respuesta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuestas $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuestas $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Respuestas  $respuestas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuestas $respuesta)
    {
        $respuesta->delete();
        return redirect('respuestas');
    }
}
