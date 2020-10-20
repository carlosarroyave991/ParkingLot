@extends('layouts.app')
@section('title','Mostrar Parqueadero')
@section('content')
<div class="d-flex justify-content-between align-items-end mb-3">
<h1 class="pb-1">{{$parkShow->nombre}}</h1>

    <p><a href="{{ route('parqueadero.index') }}" class="btn btn-outline-dark btn-sm">Regresar al listado</a></p>
</div>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                Detalles
            </div>
            <div class="card-body">
                <h5 class="card-title">ID del parqueadero: {{ $parkShow->id }}</h5>
                <div class="card-text">
                    <p><strong>Capacidad Vehicular</strong>: {{ $parkShow->capacidad_vehiculos }}</p>
                    <p><strong>Cupos Disponibles</strong>: {{ $parkShow->cupos_disponibles }}</p>
                    <p><strong>Direccion</strong>: {{ $parkShow->direccion }}</p>
                    <p><strong>Fecha de registro</strong>: {{ $parkShow->created_at }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
    </div>
</div>
<br>
@endsection
