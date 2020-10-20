@extends('layout')
@section('title','Editar Usuario')
@section('content')
<h3 class="text-center mb-3 pt-3">Editar el Usuario</h3>
<form action="{{route('clienteupdate',$clienteEdit->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <input type="text" name="nombre" id="name" value="{{$clienteEdit->nombre}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="telefono" id="telefono" value="{{$clienteEdit->telefono}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="correo" id="correo" value="{{$clienteEdit->correo}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="direccion" id="direccion" value="{{$clienteEdit->direccion}}" class="form-control">
    </div>
    {{--<div class="form-group">
        <!--<input type="text" name="profesion_id" id="profesion_id" value="{{$usersEdit->profesiones_id}}" class="form-control">-->
        <div class="form-group row">
            <div class="col-sm-9">
                <select name="profesion" id="profesion_id" class="form-control{{ $errors->has('profesion') ? ' is-invalid' : '' }}">
                <option value="{{$prof->id}}" >{{$prof->title}}</option>
                    @foreach($profesiones as $profesion)
                        <option value="{{$profesion->id}}">{{$profesion->title}}</option>
                    @endforeach
                </select>
            </div>
    </div>
    </div>--}}
<button class="btn btn-success btn-block">Editar Usuario</button>
@if (session('update'))
        <div class="alert alert-success mt-3">
            {{session('update')}}
        </div>
    @endif
</form>
@endsection
