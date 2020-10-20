@extends('layout')
@section('title','Mostrar Usuario')
@section('content')
<div class="d-flex justify-content-between align-items-end mb-3">
    <h1 class="pb-1">{{ $usersShow->name }}</h1>

    <p><a href="{{ route('index') }}" class="btn btn-outline-dark btn-sm">Regresar al listado</a></p>
</div>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                Detalles
            </div>
            <div class="card-body">
                <h5 class="card-title">ID del usuario: {{ $usersShow->id }}</h5>
                <div class="card-text">
                    <p><strong>Correo electrónico</strong>: {{ $usersShow->email }}</p>
                <p><strong>Contraseña</strong>:{{$usersShow->password}}</p>
                    <p><strong>Fecha de registro</strong>: {{ $usersShow->created_at }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
    </div>
</div>
<br>
@endsection
