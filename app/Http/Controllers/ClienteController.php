<?php

namespace App\Http\Controllers;

use App;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes= App\Cliente::paginate(5);
        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $crearCliente=new Cliente;
        $crearCliente->cedula=$request->cedula;
        $crearCliente->nombres=$request->nombres;
        $crearCliente->apellidos=$request->apellidos;
        $crearCliente->correo=$request->correo;
        $crearCliente->telefono=$request->telefono;
        if ($request->hasFile('foto')) {
            $archivo = $request->file('foto');
            $nombreImg = 'storage/storage/img/cliente' . time() . '-' . $archivo->getClientOriginalName();
            if ($archivo->move('storage/storage/img/cliente', $nombreImg)) {
                echo "guardado";
                $success = true;
            }
        } else {
            $nombreImg = 'storage/storage/img/cliente/default.png';
            $success = true;
        }
        $crearCliente->direccion=$request->direccion;
        $crearCliente->save();
        return back()->with('crear','El usuario se ha creado correctamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $clienteShow = App\Cliente::findOrFail($id);
        return view('show', compact('id','clienteShow'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$profesiones = Profesion::orderBy('title', 'asc')->get();
        //$prof = App\Profesion::findOrFail($id);
        $clienteEdit = App\Cliente::findOrFail($id);
        return view('edit',compact('clienteEdit'));
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
        $clienteUpdate = App\Cliente::findOrFail($id);
        $clienteUpdate->name=$request->name;
        $clienteUpdate->email=$request->email;

        //$clienteUpdate->password=bcrypt($request['password']);
        //$usersUpdate->password=$request->password;
        //$usersUpdate->profesion_id=$request->input('profesion');
        $usersUpdate->save();
        return back()->with('update','El cliente se ha actualizado correctamente!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $clienteDelete=App\Cliente::findOrFail($id);
        $clienteDelete->delete();
        return back()->with('destroy','El cliente ha sido eliminado correctamente!');
    }
}
