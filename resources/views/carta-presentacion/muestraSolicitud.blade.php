@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>SOLICITUD {{$solicitud->id}}</h1>
@stop
@section('content')
<div class="card card-dark card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="solicitud-tab" style="text-transform: uppercase" data-toggle="pill" href="#solicitud" role="tab" aria-controls="solicitud" aria-selected="true">Solicitud</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
          <div class="tab-pane fade show active" id="solicitud" role="tabpanel" aria-labelledby="solicitud-tab">
              <div class="card row">
                  <div class="col-md-12">
                    <table class="table" style="margin-top: 20px">
                        <tbody style="border:1px solid #ccc">
                            <tr>
                                <th style="width: 35%">
                                    CODIGO SERFOR
                                </th>
                                <td>
                                    @if($solicitud->serfor=="Pendiente")
                                    <span class="badge badge-danger">
                                    {{$solicitud->serfor}}
                                    </span>
                                    @else
                                    <span class="badge badge-primary">
                                        {{$solicitud->serfor}}
                                    </span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 35%">
                                    Nombre
                                </th>
                                <td>{{$solicitud->nombre}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Apellido Paterno
                                </th>
                                <td>{{$solicitud->apPaterno}}</td>
                            </tr>
                            <tr>
                                <th>Apellido Materno</th>
                                <td>{{$solicitud->apMaterno}}</td>
                            </tr>
                            <tr>
                                <th>Genero</th>
                                <td>{{$solicitud->genero}}</td>
                            </tr>
                            <tr>
                                <th>Condicion</th>
                                <td>{{$solicitud->condicion}}</td>
                            </tr>
                            <tr>
                                <th>Telefono</th>
                                <td>{{$solicitud->telefono}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$solicitud->email}}</td>
                            </tr>
                            <tr>
                                <th>Documento</th>
                                <td>{{$solicitud->documento}}:</td>
                            </tr>
                            <tr>
                                <th>Nombre del proyecto</th>
                                <td>{{$solicitud->proyecto}}</td>
                            </tr>
                            <tr>
                                <th>Hoja de Vida</th>
                                <td>{{$solicitud->hojaVida}}</td>
                            </tr>
                            <tr>
                                <th>Plan de investigacion</th>
                                <td>{{$solicitud->familia}}</td>
                            </tr>
                            <tr>
                                <th>Ficha de datos de los colaboradores</td>
                                <td>{{$solicitud->orden}}</td>
                            </tr>
                        </tbody>
                      </table>
                      <div class="text-center" style="padding:15px">
                        <a href="" class="btn btn-success">Generar carta de presentacion</a>
                        <a href="" class="btn btn-danger">Generar salida a campo</a>
                    </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop