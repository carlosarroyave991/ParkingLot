@extends('layout')
@section('title','Crear Usuario')
@section('content')
        <div class="row">
            <div class="col-9">
                {{--Fila Formulario --}}
                <div class="col-12">
                    <h3 class="text-center mb-4">Agregar Usuarios</h3>
                <form action="{{route('store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre Completo">
                    </div>
                    <div class="form-group">
                        <input type="mail" name="email" id="email" class="form-control" placeholder="Correo Electronico">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                    </div>
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

