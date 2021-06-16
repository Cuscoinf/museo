@extends('adminlte::page')

@section('title', 'Solicitudes de deposito')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Solicitudes de deposito recibidas</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Depositos</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nro Solicitud</th>
                <th>Fecha</th>
                <th>Investigador</th>
                <th>Tema de investigacion</th>
                <th>Hoja de SERFOR</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach ($solicitudes as $solicitud)
              <tr>
                <td style="width: 10px"></td>
                <td>{{$solicitud->id}}</td>
                <td>{{$solicitud->updated_at}}</td>
                <td>{{$solicitud->nombre." ".$solicitud->apPaterno}}</td>
                <td>{{$solicitud->titulo}}</td>
                <td><a href="">Descargar hoja de SERFOR</a></td>
                <td><a href="#" class="btn btn-success">Habilitar deposito</a> <a href="#" class="btn btn-warning">Observar</a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
