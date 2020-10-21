@extends('layouts.app')
@section('title','Crear Usuario')
@section('content')
        <div class="row">
            <div class="col-9">
                {{--Fila Formulario --}}
                <div class="col-12">
                    <h3 class="text-center mb-4">Agregar Clientes</h3>
                <form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data" class="from-horizontal">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="nombres" id="nombres" class="form-control{{ $errors->has('nombres') ? ' is-invalid' : '' }}" value="{{old('nombres')}}" placeholder="Nombres del cliente">
                        @if ($errors->has('nombres'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('nombres') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="apellidos" id="apellidos" class="form-control{{ $errors->has('apellidos') ? ' is-invalid' : '' }}" value="{{old('apellidos')}}" placeholder="Apellidos del cliente">
                        @if ($errors->has('apellidos'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('apellidos') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="cedula" id="cedula" class="form-control{{ $errors->has('cedula') ? ' is-invalid' : '' }}" value="{{old('cedula')}}" placeholder="Cedula del cliente">
                        @if ($errors->has('cedula'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('apellidos') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="mail" name="correo" id="correo" class="form-control{{ $errors->has('correo') ? ' is-invalid' : '' }}" value="{{old('correo')}}" placeholder="Correo Electronico">
                        @if ($errors->has('correo'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('correo') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="telefono" id="telefono" class="form-control{{ $errors->has('telefono') ? ' is-invalid' : '' }}" value="{{old('telefono')}}" placeholder="Telefono">
                        @if ($errors->has('telefono'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="file" name="foto" id="foto" class="form-control{{ $errors->has('foto') ? ' is-invalid' : '' }}" value="{{old('foto')}}" placeholder="Foto del cliente">
                        @if ($errors->has('foto'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('foto') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <input type="text" name="direccion" id="direccion" class="form-control{{ $errors->has('direccion') ? ' is-invalid' : '' }}" value="{{old('direccion')}}" placeholder="Direccion">
                        @if ($errors->has('direccion'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('direccion') }}</strong>
                            </span>
                        @endif
                    </div>
                    <hr>
                    <dt></dt>
                    <h3 class="text-center mb-4">Agregar Vehiculos</h3>
                    <hr>
                    <p class="text-center mb-4">Escoja la cantidad de vehiculos que desea agregar:</p>
                    {{--CREAR INPUTS PARA LOS CAMPOS DE VEHICULO--}}
                    {{$vehiculos->cliente_id==$clientes->id}}
                    <div class="form-group">
                        <input type="text" name="placa" id="placa" class="form-control" placeholder="Placa">
                    </div>
                    <div class="form-group">
                        <input type="text" name="marca" id="marca" class="form-control" placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <input type="text" name="color" id="color" class="form-control" placeholder="Color">
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

