@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>MUESTRA DE ESPECIMEN</h1>
@stop

@section('content')


<div class="card card-dark card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="ornitologia-tab" data-toggle="pill" href="#ornitologia" role="tab" aria-controls="ornitologia" aria-selected="true">{{$area}}</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
          <div class="tab-pane fade show active" id="ornitologia" role="tabpanel" aria-labelledby="ornitologia-tab">
              <div class="card">
                  <table class="table">
                    <tbody>
                        <tr>
                            <td>
                                Codigo Museo
                            </td>
                            <td>
                                {{$especimen->codigo}}
                            </td>
                        </tr>
                        <tr>
                            <td>Especie</td>
                            <td>{{$especimen->especie}}</td>
                        </tr>
                        <tr>
                            <td>Genero</td>
                            <td>{{$especimen->genero}}</td>
                        </tr>
                        <tr>
                            <td>Familia</td>
                            <td>{{$especimen->familia}}</td>
                        </tr>
                        <tr>
                            <td>Orden</td>
                            <td>{{$especimen->orden}}</td>
                        </tr>
                        <tr>
                            <td>Sexo</td>
                            <td>{{$especimen->sexo}}</td>
                        </tr>
                        <tr>
                            <td>Tejido ADN</td>
                            <td>{{$especimen->tejidoAnd}}</td>
                        </tr>
                        <tr>
                            <td>Tejido COD</td>
                            <td>{{$especimen->tejidoCod}}</td>
                        </tr>
                            <td>{{$especimen->preservacion}}</td>
                            <td>{{$especimen->colector}}</td>
                            <td>{{$especimen->autor}}</td>
                            <td>{{$especimen->observacion}}</td>
                            <td>{{$especimen->foto}}</td>
                        </tr>
                    </tbody>
                  </table>
              </div>
              <div class="card-footer">
                  <a href="" class="btn btn-success">Verificar y aprobar</a>
                  <a href="" class="btn btn-danger">Observar</a>
              </div>
          </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop