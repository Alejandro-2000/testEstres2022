<?php

namespace App\Http\Controllers;

use App\Models\ProgramaEstudio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramaEstudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //metodo para sacar los datos de la tabla estado civil
        $datos_programa_estudio=ProgramaEstudio::all();
        return view("programaestudio.index",compact("datos_programa_estudio"));

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
            'descripcion_carrera' => 'required'
        ]);

        $datos_programa_estudio = $request->all();
        ProgramaEstudio::create($datos_programa_estudio); //metodo para guardar los datos en la variable
        return redirect()->route('programaestudio.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProgramaEstudio  $programaEstudio
     * @return \Illuminate\Http\Response
     */
    public function show(ProgramaEstudio $programaestudio)
    {
        //
        return back()->with(["modal_delete"=>true,"delete_programaestudio"=>$programaestudio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProgramaEstudio  $programaEstudio
     * @return \Illuminate\Http\Response
     */
    public function edit(ProgramaEstudio $programaestudio)
    {
        //
        return back()->with(["modal_edit"=>true,"edit_programaestudio"=>$programaestudio]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProgramaEstudio  $programaEstudio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProgramaEstudio $programaestudio)
    {
        //
        $request->validate([
            'descripcion_carrera' => 'required|alpha'
        ]);

        $programaestudio->update($request->all());
        return redirect('programaestudio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProgramaEstudio  $programaEstudio
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProgramaEstudio $programaestudio)
    {
        //
        $programaestudio->delete();
        return redirect('programaestudio');
    }
}
