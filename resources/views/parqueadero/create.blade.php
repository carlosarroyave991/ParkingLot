@extends('layouts.app')
@section('title','Crear Parqueadero')
@section('content')
        <div class="row">
            <div class="col-9">
                {{--Fila Formulario --}}
                <div class="col-12">
                    <h3 class="text-center mb-4">Agregar Parqueadero</h3>
                <form action="{{route('parqueadero.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombre" id="nombres" class="form-control" placeholder="Nombre del parqueadero">
                    </div>
                    <div class="form-group">
                        <input type="number" name="capacidad_vehiculos" id="capacidad_vehiculos" class="form-control" placeholder="Capacidad vehicular">
                    </div>
                    <div class="form-group">
                        <input type="number" name="cupos_disponibles" id="cupos_disponibles" class="form-control" placeholder="Cupos disponibles">
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="direccion" class="form-control" placeholder="Direccion">
                    </div>
                    {{--Inner join para llamar los campos de otra tabla--}}
                    {{--<div class="form-group row">
                        <label for="profesion_id" class="col-sm-3 form-control-label">Profesiones</label>
                        <div class="col-sm-9">
                            <select name="profesion" id="profesion_id" class="form-control{{ $errors->has('profesion') ? ' is-invalid' : '' }}">
                                <option value="0" >Seleccione una profesi&oacute;n</option>
                                @foreach($profesiones as $profesion)
                                    <option value="{{$profesion->id}}">{{$profesion->title}}</option>
                                @endforeach
                            </select>
                        </div>
                </div>
            </div>
            {{--Fin del formulario--}}
                    <button type="submit" class="btn btn-success btn-block">Registrar</button>
                </form>
                    @if (session('crear'))
                        <div class="alert alert-success mt-3">
                            {{session('crear')}}
                        </div>
                    @endif
                </div>
            </div>
        </div>
@endsection

