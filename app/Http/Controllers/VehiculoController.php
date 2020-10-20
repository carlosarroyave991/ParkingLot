<?php

namespace App\Http\Controllers;

use App;
use App\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos=App\Vehiculo::paginate(5);
        return view('vehiculo.index',compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vehiculoCrear=new Vehiculo;
        $vehiculoCrear->placa=$request->placa;
        $vehiculoCrear->marca=$request->marca;
        $vehiculoCrear->color=$request->color;
        $vehiculoCrear->save();
        return back()->with('crear','El vehiculo se ha creado correctamente!.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculoShow = App\Vehiculo::findOrFail($id);
        return view('vehiculo.show', compact('id','vehiculoShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculoEdit = App\Vehiculo::findOrFail($id);
        return view('vehiculo.edit',compact('id','vehiculoEdit'));
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
        $vehiculoUpdate = App\Vehiculo::findOrFail($id);
        $vehiculoUpdate->placa=$request->placa;
        $vehiculoUpdate->marca=$request->marca;
        $vehiculoUpdate->color=$request->color;
        //$clienteUpdate->password=bcrypt($request['password']);
        //$usersUpdate->password=$request->password;
        //$usersUpdate->profesion_id=$request->input('profesion');
        $vehiculoUpdate->save();
        return back()->with('update','El vehiculo se ha actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculoDelete=App\Vehiculo::findOrFail($id);
        $vehiculoDelete->delete();
        return back()->with('vehiculo.destroy','El vehiculo ha sido eliminado correctamente!');
    }
}
