@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Registro Especimen</h1>
@stop

@section('content')


<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Registrar Especimen</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Registro de nombres cientificos</h4>
                </div>
                <div class="card-body">
                 <form class="form-horizontal" action="{{route('guardarNombreEspecimen')}}" method="POST">
                      @csrf
                      <div class="card-body row">
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="nombreCientifico">Nombre cientifico</label>
                                <input type="text" class="form-control" id="nombreCientifico" placeholder="Ingrese nombre cientifico" name="nombreCientifico" value="{{old('nombreCientifico')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="autor" style="display: block">Autor</label>
                                <input type="text" class="form-control" id="autor" placeholder="Autor" name="autor" value="{{old('autor')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="familia">Familia</label>
                                <input type="text" class="form-control" id="familia" placeholder="Familia" name="familia" value="{{old('familia')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="clase">Clase</label>
                                <input type="text" class="form-control" id="clase" placeholder="Clase" name="clase" value="{{old('clase')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="nombreComunEsp">Nombre comun(ESP)</label>
                                <input type="text" class="form-control" id="nombreComunEsp" placeholder="Nombre comun español" name="nombreComunEsp" value="{{old('nombreComunEsp')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="nombreComunEng">Nombre comun(ENG)</label>
                                <input type="text" class="form-control" id="nombreComunEng" placeholder="Nombre comun ingles" name="nombreComunEng" value="{{old('nombreComunEng')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="nombreComunEng">Año</label>
                                <input type="text" class="form-control" id="anioColecta" placeholder="Año de colecta" name="anioColecta" value="{{old('anioColecta')}}">
                            </div>
                          </div>
                          <div class="col-md-4 col-xl-3">
                            <div class="form-group">
                                <label for="fuente">Fuente</label>
                                <select name="fuente" id="fuente" class="form-control">
                                  <option value="Fuente Local">Fuente local</option>
                                  <option value="Fauna Silvestre">Fauna silvestre</option>
                                </select>
                            </div>
                          </div>
                          <div class="text-left col-md-12">
                            <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Registrar nombre</button>
                        </div>
                      </div>
                  </form>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>Nombre Cientifico</th>
                            <th>Autor</th>
                            <th>Familia</th>
                            <th>Clase</th>
                            <th>Nombre comun Español</th>
                            <th>Nombre comun Ingles</th>
                            <th>Año de Colecta</th>
                            <th>Fuente</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($nombresCientificos as $nombres)
                                <tr>
                                    <td>{{$nombres->nombreCientifico}}</td>
                                    <td>
                                       {{$nombres->autor}}
                                    </td>
                                    <td>
                                      {{$nombres->familia}}
                                    </td>
                                    <td>
                                      {{$nombres->clase}}
                                    <td>
                                      {{$nombres->nombreComunEsp}}
                                    </td>
                                    <td>
                                      {{$nombres->nombreComunEng}}
                                    </td>
                                    <td>
                                      {{$nombres->anioColecta}}
                                    </td>
                                    <td>
                                      {{$nombres->fuente}}
                                    </td>
                                    <td>
                                        <form action="{{ route('eliminarNombreEspecimen',$nombres->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger delete-confirm" id="button-delete" class="button delete-confirm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
    .bootstrap-tagsinput {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        display: inline-block;
        padding: 4px 6px;
        color: #555;
        vertical-align: middle;
        border-radius: 4px;
        max-width: 100%;
        line-height: 27px;
        cursor: text;
      }
      .bootstrap-tagsinput input {
        border: none;
        box-shadow: none;
        outline: none;
        background-color: transparent;
        padding: 0 6px;
        margin: 0;
        width: auto;
        max-width: inherit;
      }
      .bootstrap-tagsinput.form-control input::-moz-placeholder {
        color: #777;
        opacity: 1;
      }
      .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
        color: #777;
      }
      .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
        color: #777;
      }
      .bootstrap-tagsinput input:focus {
        border: none;
        box-shadow: none;
      }
      .bootstrap-tagsinput .tag {
        margin-right: 0px;
        color: white;
        background: #555;
        border-radius: 5px;
        padding: .2rem
      }
      .bootstrap-tagsinput .tag [data-role="remove"] {
        margin-left: 8px;
        cursor: pointer;
      }
      .bootstrap-tagsinput .tag [data-role="remove"]:after {
        content: "x";
        padding: 0px 2px;
      }
      .bootstrap-tagsinput .tag [data-role="remove"]:hover {
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
      }
      .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
      }</style>
@stop

@section('js')
<script src="{{asset('js/tags.js')}}"></script>
@stop
