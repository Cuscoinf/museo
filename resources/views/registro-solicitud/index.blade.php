@extends('adminlte::page')

@section('title', 'Investigador')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Solicitud</h1>
@stop

@section('content')


<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Registrar Solicitud de Entidad</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Asignar Investigador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Permiso a Campo</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Registrar Solicitud de Entidad</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                      @csrf
                      <div class="card-body">
                          <div class="form-group">
                              <label for="razonSocial">Razon Social</label>
                              <input type="text" class="form-control" id="razonSocial" placeholder="Ingrese Razón Social" name="razonSocial" value="{{old('razonSocial')}}">
                              @error('razonSocial')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="ruc">RUC</label>
                              <input type="text" class="form-control" id="ruc" placeholder="Ingrese RUC de la Empresa" name="ruc" value="{{old('ruc')}}">
                              @error('ruc')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="responsable">Responsable</label>
                              <input type="text" class="form-control" id="responsable" placeholder="Ingrese Nombre Completo del Responsable" name="responsable" value="{{old('responsable')}}">
                              @error('responsable')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="descripcionSolicitud">Descripción de la Solicitud</label>
                              <textarea class="form-control" name="descripcionSolicitud" id="descripcionSolicitud" placeholder="Ingrese tipo usuario" rows="5"></textarea> 
                              @error('descripcionSolicitud')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btn-info">Registrar Solicitud</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="custom-tabs-one-profile-tab" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Asignar Investigador</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                      @csrf
                      <div class="card-body">
                          <div class="form-group">
                            <label for="seleccioneInvestigador">Seleccione el Investigador</label>
                            <select name="seleccioneInvestigador" class="browser-default custom-select">
                                <option selected>Investigador con Permiso</option>
                                <option value="1">Investigador 1</option>
                                <option value="2">Investigador 2</option>
                                <option value="3">Investigador 3</option>
                            </select>
                              @error('seleccioneInvestigador')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="serfor">Número de Permiso SERFOR</label>
                              <input type="text" class="form-control" id="serfor" placeholder="Ingrese el Número de Permiso de SERFOR" name="serfor" value="{{old('serfor')}}">
                              @error('serfor')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btn-info">Asignar Investigador</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="custom-tabs-one-messages-tab" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Permiso a Campo</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                      @csrf
                      <div class="card-body">
                          <div class="form-group">
                              <label for="investigadorDesignado">Investigador Designado</label>
                              <select name="investigadorDesignado" class="browser-default custom-select">
                                <option selected>Seleccione Investigador que Ira a campo</option>
                                <option value="1">Investigador 1</option>
                                <option value="2">Investigador 2</option>
                                <option value="3">Investigador 3</option>
                              </select>
                              @error('investigadorDesignado')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="empresaCargo">Empresa a Cargo</label>
                              <select name="empresaCargo" class="browser-default custom-select">
                                <option selected>Seleccione la empresa encargada</option>
                                <option value="1">Investigador 1</option>
                                <option value="2">Investigador 2</option>
                                <option value="3">Investigador 3</option>
                              </select>
                              @error('empresaCargo')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="seleccioneArea">Area</label>
                              <select name="seleccioneArea" class="browser-default custom-select">
                                <option selected>Seleccione Area Responsable</option>
                                <option value="1">Investigador 1</option>
                                <option value="2">Investigador 2</option>
                                <option value="3">Investigador 3</option>
                              </select>
                              @error('seleccioneArea')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="numeroSolicitud">Número de Solicitud</label>
                              <input type="text" class="form-control" id="numeroSolicitud" placeholder="Ingrese el Número de Solicitud" name="numeroSolicitud" value="{{old('numeroSolicitud')}}">
                              @error('numeroSolicitud')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                          <div class="form-group">
                              <label for="numeroSolicitud">Número de Solicitud</label>
                              <label for="file">
                                <div class="boxFile" data-text="Seleccionar archivo">Seleccionar archivo</div>
                                </label>
                                <input id="file" multiple="" name="invoice[]" size="6000" type="file" accept="application/pdf,image/x-png,image/gif,image/jpeg,image/jpg,image/tiff">
                              @error('numeroSolicitud')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                      <div class="modal-footer justify-content-between">
                          <button type="submit" class="btn btn-info">Generar Permiso</button>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#button-delete').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Seguro que quiere eliminar?',
            text: "¡No podrás revertir esto!",
            type: 'Cuidado',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar'
        }).then((result) => {
            if (result.value) {

                form.submit();
            }
        });
    });
    </script>
@stop
