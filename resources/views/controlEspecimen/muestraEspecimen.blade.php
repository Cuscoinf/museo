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
                <a class="nav-link active" id="ornitologia-tab" style="text-transform: uppercase" data-toggle="pill" href="#ornitologia" role="tab" aria-controls="ornitologia" aria-selected="true">{{$area}}</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
          <div class="tab-pane fade show active" id="ornitologia" role="tabpanel" aria-labelledby="ornitologia-tab">
              <div class="card row">
                  <div class="col-md-12">
                    <table class="table" style="margin-top: 20px">
                        @if($area == "ornitologia")
                        <tbody style="border:1px solid #ccc">
                            <tr>
                                <th style="width: 35%">
                                    Codigo Museo
                                </th>
                                <td>{{$especimen->codigo}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Tipo de Captura
                                </th>
                                <td>{{$especimen->tipoCaptura}}</td>
                            </tr>
                            <tr>
                                <th>Fecha de Colecta</th>
                                <td>{{$especimen->fechaColecta}}</td>
                            </tr>
                            <tr>
                                <th>Colector</th>
                                <td>{{$especimen->colector}}</td>
                            </tr>
                            <tr>
                                <th>Identificador</th>
                                <td>{{$especimen->identificador}}</td>
                            </tr>
                            <tr>
                                <th>Especie</th>
                                <td>{{$especimen->especie}}</td>
                            </tr>
                            <tr>
                                <th>Genero</th>
                                <td>{{$especimen->genero}}</td>
                            </tr>
                            <tr>
                                <th>Familia</th>
                                <td>{{$especimen->familia}}</td>
                            </tr>
                            <tr>
                                <th>Orden</td>
                                <td>{{$especimen->orden}}</td>
                            </tr>
                            <tr>
                                <th>Nro. de Ingreso</th>
                                <td>{{$especimen->nIngreso}}</td>
                            </tr>
                            <tr>
                                <th>Nro. de Colecta</th>
                                <td>{{$especimen->nColecta}}</td>
                            </tr>
                            <tr>
                                <th>Estado actual</th>
                                <td>{{$especimen->estadoActual}}</td>
                            </tr>
                            <tr>
                                <th>Tipo de preparación</th>
                                <td>{{$especimen->tipoPreparacion}}</td>
                            </tr>
                            <tr>
                                <th>Caracteristicas</th>
                                <td>{{$especimen->caracteristicas}}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>{{$especimen->foto}}</td>
                            </tr>
                            <tr>
                                <th>Pais</th>
                                <td>{{$especimen->pais}}</td>
                            </tr>
                            <tr>
                                <th>Departamento</th>
                                <td>{{$especimen->departamento}}</td>
                            </tr>
                            <tr>
                                <th>Provincia</th>
                                <td>{{$especimen->provincia}}</td>
                            </tr>
                            <tr>
                                <th>Distrito</th>
                                <td>{{$especimen->distrito}}</td>
                            </tr>
                            <tr>
                                <th>Localidad</th>
                                <td>{{$especimen->localidad}}</td>
                            </tr>
                            <tr>
                                <th>Localización</th>
                                <td>{{$especimen->localidad}}</td>
                            </tr>
                            <tr>
                                <th>Geolocalizazion</th>
                                <td>...carga del mapa de ubicacion...</td>
                            </tr>
                        </tbody>
                        @endif
                        @if($area == "herpetologia")
                        <tbody style="border:1px solid #ccc">
                            <tr>
                                <th style="width: 35%">Codigo Museo</th>
                                <td>{{$especimen->codigo}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Tipo de Captura
                                </th>
                                <td>{{$especimen->tipoCaptura}}</td>
                            </tr>
                            <tr>
                                <th>Fecha de colecta</th>
                                <td>{{$especimen->fechaColecta}}</td>
                            </tr>
                            <tr>
                                <th>Colector</th>
                                <td>{{$especimen->colector}}</td>
                            </tr>
                            <tr>
                                <th>Autor</th>
                                <td>
                                    {{$especimen->autor}}
                                </td>
                            </tr>
                            <tr>
                                <th>Especie</th>
                                <td>{{$especimen->especie}}</td>
                            </tr>
                            <tr>
                                <th>Genero</th>
                                <td>{{$especimen->genero}}</td>
                            </tr>
                            <tr>
                                <th>Familia</th>
                                <td>{{$especimen->familia}}</td>
                            </tr>
                            <tr>
                                <th>Orden</td>
                                <td>{{$especimen->orden}}</td>
                            </tr>
                            <tr>
                                <th>Sexo</th>
                                <td>{{$especimen->sexo}}</td>
                            </tr>
                            <tr>
                                <th>Tejido ADN</th>
                                <td>{{$especimen->tejidoAnd}}</td>
                            </tr>
                            <tr>
                                <th>Tejido COD</th>
                                <td>{{$especimen->tejidoCod}}</td>
                            </tr>
                            <tr>
                                <th>Tipo de preservacion</th>
                                <td>{{$especimen->preservacion}}</td>
                            </tr>
                            <tr>
                                <th>Observacion</th>
                                <td>
                                    {{$especimen->observacion}}
                                </td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>{{$especimen->foto}}</td>
                            </tr>
                            <tr>
                                <th>Pais</th>
                                <td>{{$especimen->pais}}</td>
                            </tr>
                            <tr>
                                <th>Departamento</th>
                                <td>{{$especimen->departamento}}</td>
                            </tr>
                            <tr>
                                <th>Provincia</th>
                                <td>{{$especimen->provincia}}</td>
                            </tr>
                            <tr>
                                <th>Distrito</th>
                                <td>{{$especimen->distrito}}</td>
                            </tr>
                            <tr>
                                <th>Localidad</th>
                                <td>{{$especimen->localidad}}</td>
                            </tr>
                            <tr>
                                <th>Localizacion</th>
                                <td>...carga del mapa de ubicacion...</td>
                            </tr>
                        </tbody>
                        @endif
                        @if($area == "maztozoologia")
                        <tbody style="border:1px solid #ccc">
                            <tr>
                                <th>
                                    Tipo de Captura
                                </th>
                                <td>{{$especimen->tipoCaptura}}</td>
                            </tr>
                            <tr>
                                <th style="width: 35%">
                                    Codigo Museo
                                </th>
                                <td>{{$especimen->codigo}}</td>
                            </tr>
                            <tr>
                                <th>Fecha de colecta</th>
                                <td>{{$especimen->fechaColecta}}</td>
                            </tr>
                            <tr>
                                <th>Colector</th>
                                <td>{{$especimen->colector}}</td>
                            </tr>
                            <tr>
                                <th>Identificador</th>
                                <td>{{$especimen->identificador}}</td>
                            </tr>
                            <tr>
                                <th>Especie</th>
                                <td>{{$especimen->especie}}</td>
                            </tr>
                            <tr>
                                <th>Genero</th>
                                <td>{{$especimen->genero}}</td>
                            </tr>
                            <tr>
                                <th>Familia</th>
                                <td>{{$especimen->familia}}</td>
                            </tr>
                            <tr>
                                <th>Orden</td>
                                <td>{{$especimen->orden}}</td>
                            </tr>
                            <tr>
                                <th>Sexo</th>
                                <td>{{$especimen->sexo}}</td>
                            </tr>
                            <tr>
                                <th>Tipo de muestra</th>
                                <td>{{$especimen->tipoMuestra}}</td>
                            </tr>
                            <tr>
                                <th>Cabeza - Cuerpo</th>
                                <td>{{$especimen->cabezaCuerpo}}</td>
                            </tr>
                            <tr>
                                <th>Cola</th>
                                <td>{{$especimen->cola}}</td>
                            </tr>
                            <tr>
                                <th>Oreja</th>
                                <td>{{$especimen->oreja}}</td>
                            </tr>
                            <tr>
                                <th>Tarso</th>
                                <td>{{$especimen->tarso}}</td>
                            </tr>
                            <tr>
                                <th>Trago</th>
                                <td>{{$especimen->trago}}</td>
                            </tr>
                            <tr>
                                <th>Antebrazo</th>
                                <td>{{$especimen->antebrazo}}</td>
                            </tr>
                            <tr>
                                <th>Ala</th>
                                <td>{{$especimen->ala}}</td>
                            </tr>
                            <tr>
                                <th>Pie</th>
                                <td>{{$especimen->pie}}</td>
                            </tr>
                            <tr>
                                <th>Peso</th>
                                <td>{{$especimen->peso}}</td>
                            </tr>
                            <tr>
                                <th>Observaciones</th>
                                <td>{{$especimen->observaciones}}</td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>{{$especimen->foto}}</td>
                            </tr>
                            <tr>
                                <th>Pais</th>
                                <td>{{$especimen->pais}}</td>
                            </tr>
                            <tr>
                                <th>Departamento</th>
                                <td>{{$especimen->departamento}}</td>
                            </tr>
                            <tr>
                                <th>Provincia</th>
                                <td>{{$especimen->provincia}}</td>
                            </tr>
                            <tr>
                                <th>Distrito</th>
                                <td>{{$especimen->distrito}}</td>
                            </tr>
                            <tr>
                                <th>Localidad</th>
                                <td>{{$especimen->localidad}}</td>
                            </tr>
                            <tr>
                                <th>Geolocalizazion</th>
                                <td>...carga del mapa de ubicacion...</td>
                            </tr>
                        </tbody>
                        @endif
                        @if($area == "decomisados")
                        <tbody style="border:1px solid #ccc">
                            <tr>
                                <th style="width: 35%">Codigo Museo</th>
                                <td>{{$especimen->codigo}}</td>
                            </tr>
                            <tr>
                                <th>
                                    Tipo de Captura
                                </th>
                                <td>{{$especimen->tipoCaptura}}</td>
                            </tr>
                            <tr>
                                <th>Fecha de colecta</th>
                                <td>{{$especimen->fechaColecta}}</td>
                            </tr>
                            <tr>
                                <th>Colector</th>
                                <td>{{$especimen->colector}}</td>
                            </tr>
                            <tr>
                                <th>Identificador</th>
                                <td>
                                    {{$especimen->identificador}}
                                </td>
                            </tr>
                            <tr>
                                <th>Especie</th>
                                <td>{{$especimen->especie}}</td>
                            </tr>
                            <tr>
                                <th>Genero</th>
                                <td>{{$especimen->genero}}</td>
                            </tr>
                            <tr>
                                <th>Familia</th>
                                <td>{{$especimen->familia}}</td>
                            </tr>
                            <tr>
                                <th>Orden</td>
                                <td>{{$especimen->orden}}</td>
                            </tr>
                            <tr>
                                <th>Sexo</th>
                                <td>{{$especimen->sexo}}</td>
                            </tr>                            
                            <tr>
                                <th>Observacion</th>
                                <td>
                                    {{$especimen->observacion}}
                                </td>
                            </tr>
                            <tr>
                                <th>Foto</th>
                                <td>{{$especimen->foto}}</td>
                            </tr>
                            <tr>
                                <th>Pais</th>
                                <td>{{$especimen->pais}}</td>
                            </tr>
                            <tr>
                                <th>Departamento</th>
                                <td>{{$especimen->departamento}}</td>
                            </tr>
                            <tr>
                                <th>Provincia</th>
                                <td>{{$especimen->provincia}}</td>
                            </tr>
                            <tr>
                                <th>Distrito</th>
                                <td>{{$especimen->distrito}}</td>
                            </tr>
                            <tr>
                                <th>Localidad</th>
                                <td>{{$especimen->localidad}}</td>
                            </tr>
                            <tr>
                                <th>Localizacion</th>
                                <td>...carga del mapa de ubicacion...</td>
                            </tr>
                        </tbody>
                        @endif
                      </table>
                  </div>
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