<?php

namespace App\Http\Controllers;

use App\Models\EstadoCivil;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadoCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //metodo para sacar los datos de la tabla estado civil
        $datos_estado_civil=EstadoCivil::all();
        return view("estadocivil.index",compact("datos_estado_civil"));
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
            'descripcion' => 'required'
        ]);

        $datos_estado_civil = $request->all();
        EstadoCivil::create($datos_estado_civil); //metodo para guardar los datos en la variable
        return redirect()->route('estadocivil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstadoCivil  $estadoCivil
     * @return \Illuminate\Http\Response
     */
    public function show(EstadoCivil $estadocivil)
    {
        //
        return back()->with(["modal_delete"=>true,"delete_estadocivil"=>$estadocivil]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstadoCivil  $estadoCivil
     * @return \Illuminate\Http\Response
     */
    public function edit(EstadoCivil $estadocivil)
    {
        //
        return back()->with(["modal_edit"=>true,"edit_estadocivil"=>$estadocivil]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EstadoCivil  $estadoCivil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EstadoCivil $estadocivil)
    {
        //
        $request->validate([
            'descripcion' => 'required|alpha'
        ]);

        $estadocivil->update($request->all());
        return redirect('estadocivil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstadoCivil  $estadoCivil
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstadoCivil $estadocivil)
    {
        //
        $estadocivil->delete();
        return redirect('estadocivil');
    }
}
