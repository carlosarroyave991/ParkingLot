@extends('layouts.app')
@section('title','Listar Vehiculos')
@section('content')
<div class="col-12">
    <h3 class="text-center mb-3 pt-3">Listado de Vehiculos</h3>
    <!--<a href="{{route('vehiculo.create')}}" class="btn btn-success">Crear Cliente Nuevo</a>-->
    <table class="table table-responsive table-striped">
        <tr>
            <th>Id</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Color</th>
            <th>Ver</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        @foreach ($vehiculos as $item)
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->placa}}</td>
            <td>{{$item->marca}}</td>
            <td>{{$item->color}}</td>
            {{--<td>
                @foreach($profesiones as $profesion)
                    @if ($item->profesion_id == $profesion->id)
                        {{$profesion->title}}
                    @endif
                @endforeach
        </td>--}}
            <td><a href="{{route('vehiculo.show',$item->id)}}" class="btn btn-info">Ver</a></td>
            <td><a href="{{route('vehiculo.edit',$item->id)}}" class="btn btn-warning">Editar</a></td>
            <td>
            <form action="{{route('vehiculo.destroy',$item->id)}}" method="POST" class="d-inline">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Eleminar</button>
                </form>
            </td>
            </tr>
        @endforeach
    </table>
    {{$vehiculos ?? ''->links()}}
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


