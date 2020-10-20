@extends('layouts.app')
@section('title','Mostrar Vehiculo')
@section('content')
<div class="d-flex justify-content-between align-items-end mb-3">
<h1 class="pb-1">Vehiculo de placa: {{ $vehiculoShow->placa }} </h1>

    <p><a href="{{ route('vehiculo.index') }}" class="btn btn-outline-dark btn-sm">Regresar al listado</a></p>
</div>

<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header">
                Detalles
            </div>
            <div class="card-body">
                <h5 class="card-title">ID del Vehiculo: {{ $vehiculoShow->id }}</h5>
                <div class="card-text">
                    <p><strong>marca</strong>: {{ $vehiculoShow->marca }}</p>
                    <p><strong>color</strong>: {{ $vehiculoShow->color }}</p>
                    {{--<p><strong>Telefono</strong>:{{$clienteShow->telefono}}</p>
                    <p><strong>Foto</strong>: {{ $clienteShow->foto }}</p>
                    <p><strong>Direccion</strong>: {{ $clienteShow->direccion }}</p>
                    <p><strong>Fecha de registro</strong>: {{ $clienteShow->created_at }}</p>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="col-4">
    </div>
</div>
<br>
@endsection
