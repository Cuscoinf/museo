@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Area 8</h1>
@stop

@section('content')

    <form action="{{route('area.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="nombre" value="{{old('nombre')}}">
        </label>
        <label>
            <br>
            <input type="text" name="slug" value="{{old('slug')}}" hidden>
        </label>
        @error('nombre')
            <br>
                <small>*{{$message}}</small>
            <br>
        @enderror
        <br>
        <button type="submit">Enviar</button>
    </form>

    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Horizontal Form</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('area.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre" value="{{old('nombre')}}">
                    @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="Ingrese nombre" name="slug" value="{{old('slug')}}">
                </div>
            </div>

          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Guardar</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
@stop
