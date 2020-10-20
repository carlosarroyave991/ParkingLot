@extends('layouts.app')
@section('title','Editar Parqueadero')
@section('content')
<h3 class="text-center mb-3 pt-3">Editar el Parqueadero</h3>
<form action="{{route('parqueadero.update',$clienteEdit->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <input type="text" name="nombre" id="nombre" value="{{$parkEdit->nombre}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="number" name="capacidad_vehiculos" id="capacidad_vehiculos" value="{{$parkEdit->capacidad_vehiculos}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="number" name="cupos_disponibles" id="cupos_disponibles" value="{{$parkEdit->cupos_disponibles}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="direccion" id="direccion" value="{{$parkEdit->direccion}}" class="form-control">
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
