<?php

namespace App\Http\Controllers;

use App\Models\Administradores;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Personas;

class AdministradoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos_administradores=Administradores::join("personas","administradores.id_persona","personas.id_persona")
            ->select("administradores.*","personas.nombre")
            ->get();
        $datos_personas=Personas::all();
        return view("administradores.index",compact("datos_administradores","datos_personas"));
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
        $datosAdministradores = $request->all();
        Administradores::create($datosAdministradores);
        return redirect()->route('administradores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function show(Administradores $administradore)
    {
        $administradore=$administradore::join('personas','administradores.id_persona','personas.id_persona')
            ->whereIdAdmin($administradore->id_admin)
            ->select('administradores.id_admin','personas.nombre')
            ->first();
        //dd($administradore);
        return back()->with(["modal_delete"=>true,"delete_administrador"=>$administradore]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function edit(Administradores $administradore)
    {
        return back()->with(["modal_edit"=>true,"edit_administrador"=>$administradore]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administradores $administradore)
    {
        $administradore->update($request->all());
        return redirect('administradores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administradores  $administradores
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administradores $administradore)
    {
        $administradore->delete();
        return redirect('administradores');
    }
}
