@extends('adminlte::page')

@section('title', 'Formacion Academica')

@section('content_header')
    <h1>Editar Formacion Academica vl8</h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Editar Formacion Academica</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('formacion-academica.update',$formacion_academica)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="form-group">
                    <label for="gradoAcademico">Grado Academico</label>
                    <input type="text" class="form-control" id="gradoAcademico" placeholder="Ingrese gradoAcademico" name="gradoAcademico" value="{{old('gradoAcademico',$formacion_academica->gradoAcademico)}}">
                    @error('gradoAcademico')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="universidad">Universidad</label>
                    <input type="text" class="form-control" id="universidad" placeholder="Ingrese universidad" name="universidad" value="{{old('universidad',$formacion_academica->universidad)}}">
                    @error('universidad')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="pais">Pais</label>
                    <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais" value="{{old('pais',$formacion_academica->pais)}}">
                    @error('pais')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="añoTitulacion">Año Titulacion</label>
                    <input type="text" class="form-control" id="añoTitulacion" placeholder="Ingrese añoTitulacion" name="añoTitulacion" value="{{old('añoTitulacion',$formacion_academica->añoTitulacion)}}">
                    @error('añoTitulacion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="slug" hidden>Slug</label>
                    <input type="text" class="form-control" id="slug" placeholder="Ingrese nombre" name="slug" value="{{old('nombre',$formacion_academica->slug)}}" hidden>
                </div>
            </div>

          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Actualizar</button>
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

