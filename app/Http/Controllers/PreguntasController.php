<?php

namespace App\Http\Controllers;

use App\Models\Preguntas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_preguntas=Preguntas::all();
        return view("preguntas.index",compact("datos_preguntas"));
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
        $request->validate([
            'enunciado_pregunta' => 'required'
        ]);

        $datos_preguntas = $request->all();
        Preguntas::create($datos_preguntas); //metodo para guardar los datos en la variable
        return redirect()->route('preguntas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function show(Preguntas $pregunta)
    {
        return back()->with(["modal_delete"=>true,"delete_pregunta"=>$pregunta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function edit(Preguntas $pregunta)
    {
        return back()->with(["modal_edit"=>true,"edit_pregunta"=>$pregunta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preguntas $pregunta)
    {
        $request->validate([
            'enunciado_pregunta' => 'required|alpha'
        ]);

        $pregunta->update($request->all());
        return redirect('preguntas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preguntas  $preguntas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preguntas $pregunta)
    {
        $pregunta->delete();
        return redirect('preguntas');
    }
}
