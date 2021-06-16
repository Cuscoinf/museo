@extends('adminlte::page')

@section('title', 'Solicitudes de investigación')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Solicitudes de investigación recibidas</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Salida a campo</h3>
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
                <th>Titulo de investigacion</th>
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
                <td><a href="{{route('muestra.solicitud', $solicitud->id)}}" class="btn btn-primary">Revisar</a></td>
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
