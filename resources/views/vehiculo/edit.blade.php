@extends('layouts.app')
@section('title','Editar Vehiculo')
@section('content')
<h3 class="text-center mb-3 pt-3">Editar el Vehiculo</h3>
<form action="{{route('vehiculo.update',$vehiculoEdit->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <input type="text" name="placa" id="placa" value="{{$vehiculoEdit->placa}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="marca" id="marca" value="{{$vehiculoEdit->marca}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="color" id="color" value="{{$vehiculoEdit->color}}" class="form-control">
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
<button class="btn btn-success btn-block">Editar Vehiculo</button>
@if (session('update'))
        <div class="alert alert-success mt-3">
            {{session('update')}}
        </div>
    @endif
</form>
@endsection
