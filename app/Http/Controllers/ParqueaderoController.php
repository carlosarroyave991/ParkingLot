<?php

namespace App\Http\Controllers;

use App;
use App\Parqueadero;
use Illuminate\Http\Request;

class ParqueaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parqueaderos=App\Parqueadero::paginate(5);
        return view('parqueadero.index',compact('parqueaderos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parqueadero.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parkCreate=new Parqueadero;
        $parkCreate->nombre=$request->nombre;
        $parkCreate->capacidad_vehiculos=$request->capacidad_vehiculos;
        $parkCreate->cupos_disponibles=$request->cupos_disponibles;
        $parkCreate->direccion=$request->direccion;
        $parkCreate->save();
        return back()->with('crear','El parqueadero se ha creado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parkShow= App\Parqueadero::findOrFail($id);
        return view('parqueadero.show', compact('id','parkShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parkEdit = App\Parqueadero::findOrFail($id);
        return view('parqueadero.edit',compact('id','parkEdit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $parkUpdate=App\Parqueadero::findOrFail($id);
        $parkUpdate->nombre=$request->nombre;
        $parkUpdate->capacidad_vehiculos=$request->name('cap_vehi');
        $parkUpdate->cupos_disponibles=$request->name('cupos');
        $parkUpdate->direccion=$request->direccion;
        $parkUpdate->save();
        return back()->with('update','La informacion del parqueadero se ha actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parkDelete=App\Parqueadero::findOrFail($id);
        $parkDelete->delete();
        return back()->with('parqueadero.destroy','La informacion del parqueadero se ha sido eliminado correctamente!');
    }
}
