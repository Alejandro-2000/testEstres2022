<?php

namespace App\Http\Controllers;

use App\Models\GradoAcademico;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GradoAcademicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //metodo para sacar los datos de la tabla estado civil
        $datos_grado_academico=GradoAcademico::all();
        return view("gradoacademico.index",compact("datos_grado_academico"));
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
        $request->validate([
            'enunciado' => 'required'
        ]);

        $datos_estado_civil = $request->all();
        GradoAcademico::create($datos_estado_civil); //metodo para guardar los datos en la variable
        return redirect()->route('gradoacademico.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GradoAcademico  $gradoAcademico
     * @return \Illuminate\Http\Response
     */
    public function show(GradoAcademico $gradoacademico)
    {
        //
        return back()->with(["modal_delete"=>true,"delete_gradoacademico"=>$gradoacademico]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GradoAcademico  $gradoAcademico
     * @return \Illuminate\Http\Response
     */
    public function edit(GradoAcademico $gradoacademico)
    {
        //
        return back()->with(["modal_edit"=>true,"edit_gradoacademico"=>$gradoacademico]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GradoAcademico  $gradoAcademico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GradoAcademico $gradoacademico)
    {
        //
        $request->validate([
            'enunciado' => 'required|alpha'
        ]);

        $gradoacademico->update($request->all());
        return redirect('gradoacademico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GradoAcademico  $gradoAcademico
     * @return \Illuminate\Http\Response
     */
    public function destroy(GradoAcademico $gradoacademico)
    {
        //
        $gradoacademico->delete();
        return redirect('gradoacademico');
    }
}
