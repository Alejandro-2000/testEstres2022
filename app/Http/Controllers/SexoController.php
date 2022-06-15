<?php

namespace App\Http\Controllers;

use App\Models\Sexo;
use Illuminate\Http\Request;

class SexoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        /*metodo para mostrar los datos de la tabla*/
        $datos_sexo=Sexo::all(); //metodo para sacar los datos de la tabla sexo
        return view("sexo.index",compact("datos_sexo"));
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
            'descripcion_sexo' => 'required'
        ]);

        $datos_sexo = $request->all();
        Sexo::create($datos_sexo); //metodo para guardar los datos en la variable
        return redirect()->route('sexo.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function show(Sexo $sexo)
    {
        //
        return back()->with(["modal_delete"=>true,"delete_sexo"=>$sexo]); //con with se mandan datos por sesion
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function edit(Sexo $sexo)
    {
        //
        return back()->with(["modal_edit"=>true,"edit_sexo"=>$sexo]); //con with se mandan datos por sesion
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sexo $sexo)
    {
        //
        $request->validate([
            'descripcion_sexo' => 'required|alpha'
        ]);

        $sexo->update($request->all());
        return redirect('sexo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sexo  $sexo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sexo $sexo)
    {
        //
        $sexo->delete();
        return redirect('sexo');
    }
}
