@extends('layouts.app')
@section('title','Crear Clientes')
@section('content')
<div class="col-12">
    <h3 class="text-center mb-3 pt-3">Listado de Clientes</h3>
    <a href="{{route('cliente.create')}}" class="btn btn-success">Crear Cliente Nuevo</a>
    <table class="table table-responsive table-striped">
        <tr>
            <th>Id</th>
            <th>Cedula</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($clientes as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cedula}}</td>
            <td>{{$item->nombres}}</td>
            <td>{{$item->apellidos}}</td>
            <td>{{$item->correo}}</td>
            <td>{{$item->telefono}}</td>
            {{--<td>
                @foreach($profesiones as $profesion)
                    @if ($item->profesion_id == $profesion->id)
                        {{$profesion->title}}
                    @endif
                @endforeach
        </td>--}}
            <td>{{$item->password}}</td>
            <td><a href="{{route('show',$item->id)}}" class="btn btn-info">Ver</a></td>
            <td><a href="{{route('edit',$item->id)}}" class="btn btn-warning">Editar</a></td>
            <td>
            <form action="{{route('destroy',$item->id)}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eleminar</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
    {{$clientes->links()}}
</div>
    @if (session('delete'))
            <div class="alert alert-warning mt-3">
            {{session('delete')}}
        </div>
    @endif
    @if (session('crear'))
        <div class="alert alert-success mt-3">
            {{session('crear')}}
        </div>
    @endif
</div>
@endsection


