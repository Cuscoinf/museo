@extends('layout.plantilla')

@section('title','area')

@section('content')
    <h1>Ver Area</h1>
    <a href="{{route('area.index')}}">Volver a Areas</a>
    <br>
    <a href="{{route('area.edit',$area)}}">Editar Area</a>
    <h2>Nombre: {{$area->nombre}}</h2>
    <h3>ID: {{$area->id}}</h3>


    <form action="{{route('area.destroy',$area)}}" method="POST">
        @csrf
        @method('delete')
        <button type="submit">Eliminar</button>
    </form>
@endsection()



