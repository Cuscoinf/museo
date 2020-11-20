@extends('adminlte::page')

@section('title', 'Investigador')

@section('content_header')
    <h1>Editar Investigador</h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Editar Investigador</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('investigador.update',$investigador)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <span>{{$investigador->nombre}}</span>
                </div>
                <div class="form-group">
                    <label for="apPaterno">Apellido Paterno</label>
                    <span>{{$investigador->apPaterno}}</span>
                </div>
                <div class="form-group">
                    <label for="apMaterno">Apellido Materno</label>
                    <span>{{$investigador->apMaterno}}</span>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                   <span>{{$investigador->email}}</span>
                </div>
                <div class="form-group">
                    <label for="tipoDocumento">Tipo Documento</label>
                    <span>{{$investigador->tipoDocumento}}</span>
                </div>
                <div class="form-group">
                    <label for="nroDocumento">Nro de Documento</label>
                    <span>{{$investigador->nroDocumento}}</span>
                </div>
                <div class="form-group">
                    <label for="pais">pais</label>
                    <span>{{$investigador->pais}}</span>
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <span>{{$investigador->genero}}</span>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <span>{{$investigador->estado}}</span>
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <span>{{$investigador->direccion}}</span>
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <span>{{$investigador->telefono}}</span>
                </div>
                <div class="form-group">
                    <label for="formacion_academica_id">Formacion Academica</label>
                    <span>{{$investigador->formacion_academica_id}}</span>
                </div>
                <div class="form-group">
                    <label for="area_id">Area</label>
                    <span>{{$investigador->area_id}}</span>
                </div>
            </div>

          <!-- /.card-body -->
          <div class="card-footer">
            <a class="btn btn-primary" href="{{route('investigador.edit',$investigador)}}">Editar</a>
            <form action="{{route('investigador.destroy',$investigador)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>
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



