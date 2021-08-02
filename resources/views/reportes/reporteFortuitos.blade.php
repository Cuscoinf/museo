@extends('adminlte::page')

@section('title', 'Solicitudes de investigación')

@section('plugins.Sweetalert2',true)


@section('content_header')
    
@stop

@section('content')

    <div class="card">
        <div class="card-header bg-info">
            <h5>Reporte anual SERFOR</h5>
        </div>
        <!-- /.card-header -->
        <div class="card mb-0">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <label for="anio" class="control-label">Seleccione el año</label>
                        <select id="anio" class="form-control">
                            <option value="">2019</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                  <table class="table">
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
                  </table>
                </div>
            </div>
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
