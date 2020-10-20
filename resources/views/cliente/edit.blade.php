@extends('layout')
@section('title','Editar Usuario')
@section('content')
<h3 class="text-center mb-3 pt-3">Editar el Usuario</h3>
<form action="{{route('update',$usersEdit->id)}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
    <input type="text" name="name" id="name" value="{{$usersEdit->name}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="text" name="email" id="email" value="{{$usersEdit->email}}" class="form-control">
    </div>
    <div class="form-group">
        <input type="password" name="password" id="password" value="{{$usersEdit->password}}" class="form-control">
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
