@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>CONTROL DE ESPECIMEN</h1>
@stop

@section('content')
<section id="app">
<div class="card card-dark card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" style="text-transform:uppercase; font-weight:bolder" id="ornitologia-tab" data-toggle="pill" href="#ornitologia" role="tab" aria-controls="ornitologia" aria-selected="true">REGISTROS {{$area}}</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <lista-especimen area="{{$area}}"></lista-especimen>
    </div>
</div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop