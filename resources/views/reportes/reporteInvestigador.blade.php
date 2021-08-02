@extends('adminlte::page')

@section('title', 'Solicitudes de investigación')

@section('plugins.Sweetalert2',true)


@section('content_header')
    
@stop

@section('content')
<div id="app">
    <div class="card">
        <div class="card-header bg-info">
            <h5>Reporte anual SERFOR</h5>
        </div>
        <!-- /.card-header -->
        <reporte-investigador></reporte-investigador>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
