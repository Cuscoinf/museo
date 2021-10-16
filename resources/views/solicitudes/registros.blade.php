@extends('adminlte::page')

@section('title', 'Solicitudes de deposito')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Solicitudes de registro</h1>
@stop

@section('content')
  <div id="app"></div>
    {{-- <div class="card">
        <div class="card-header">
          <h3 class="card-title">Solicitudes de registro investigadores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Condicion</th>
                <th>Grado</th>
                <th>Universidad</th>
                <th>Estado</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($solicitudes as $solicitud)
              <tr>
                <td style="width: 10px"></td>
                <td>{{$solicitud->nombre}}</td>
                <td>{{$solicitud->apPaterno." ".$solicitud->apMaterno}}</td>
                <td>{{$solicitud->condicion}}</td>
                <td>{{$solicitud->gradoAcademico}}</td>
                <td>{{$solicitud->universidad}}</td>
                <td><span class="badge badge-danger">{{($solicitud->estado==0)?"No activo":"Activo"}} </span></td>
                <td><a href="" class="btn btn-sm btn-primary"> Ver</a> <a href="" class="btn btn-sm btn-success"> Habilitar</a> <a href="" class="btn btn-sm btn-danger"> Denegar</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div> --}}
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
