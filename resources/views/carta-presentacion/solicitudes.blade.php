@extends('adminlte::page')

@section('title', 'Carta de presentacion')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Solicitudes recibidas</h1>
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
                <th>Tema de investigacion</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="width: 10px">#</td>
                    <td>S0001</td>
                    <td>22/03/2021</td>
                    <td>Cristiand Romero</td>
                    <td>Aves del peru</td>
                    <td><button class="btn btn-primary">Revisar</button></td>
                  </tr>
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
