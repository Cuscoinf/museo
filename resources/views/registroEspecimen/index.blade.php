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
            {{--<li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Asignar Investigador</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Permiso a Campo</a>
            </li>--}}
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Registrar Especimen</h4>
                </div>
                <div class="card-body">
                 <form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                      @csrf
                      <div class="card-body row">
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre..." name="nombre" value="{{old('nombre')}}">
                                @error('nombre')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                         {{--}} <div class="col-md-4">
                            <div class="form-group">
                                <label for="apPaterno">Apellido Paterno</label>
                                <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese apellido paterno" name="apPaterno" value="{{old('apPaterno')}}">
                                @error('apPaterno')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                        --}}
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="cnMHNC">Codigo Museo MHNC</label>
                                <input type="text" class="form-control" id="cnMHNC" placeholder="C" name="cnMHNC" value="{{old('cnMHNC')}}">
                                @error('cnMHNC')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="tipoUsuario">Tipo Usuario del Sistema</label>
                                <input type="text" class="form-control" id="tipoUsuario" placeholder="Ingrese tipo usuario" name="tipoUsuario" value="{{old('tipoUsuario')}}">
                                @error('tipoUsuario')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" placeholder="Ingrese email" name="email" value="{{old('email')}}">
                                @error('email')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="tipoDocumento">Tipo Documento</label>
                                <input type="text" class="form-control" id="tipoDocumento" placeholder="Ingrese tipo documento" name="tipoDocumento" value="{{old('tipoDocumento')}}">
                                @error('tipoDocumento')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="nroDocumento">Nro de Documento</label>
                                <input type="text" class="form-control" id="nroDocumento" placeholder="Ingrese nro de documento" name="nroDocumento" value="{{old('nroDocumento')}}">
                                @error('nroDocumento')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="pais">pais</label>
                                <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais" value="{{old('pais')}}">
                                @error('pais')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <input type="text" class="form-control" id="genero" placeholder="Ingrese genero" name="genero" value="{{old('genero')}}">
                                @error('genero')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="estado">Estado</label>
                                <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" name="estado" value="{{old('estado')}}">
                                @error('estado')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="direccion">Direccion</label>
                                <input type="text" class="form-control" id="direccion" placeholder="Ingrese direccion" name="direccion" value="{{old('direccion')}}">
                                @error('direccion')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono" name="telefono" value="{{old('telefono')}}">
                                @error('telefono')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="formacion_academica_id">Formacion Academica</label>
                                <select name="formacion_academica" id="" class="form-control">
                                    @foreach ($formacion as $f)
                                    <option value="{{$f->id}}">{{$f->gradoAcademico." - ".$f->universidad." - ".$f->anioTitulacion}}</option>
                                    @endforeach
                                </select>
                                @error('formacion_academica_id')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="area_id">Area</label>
                                <select name="area_id" class="form-control">
                                    @foreach ($areas as $area)
                                    <option value="{{$area->id}}">{{$area->nombre}}</option>
                                    @endforeach
                                </select>
                                @error('area_id')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Registrar investigador</button>
                      </div>
                  </form><form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                    @csrf
                    <div class="card-body row">
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nombre">Nombre</label>
                              <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre..." name="nombre" value="{{old('nombre')}}">
                              @error('nombre')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="apPaterno">Apellido Paterno</label>
                              <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese apellido paterno" name="apPaterno" value="{{old('apPaterno')}}">
                              @error('apPaterno')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="AAAA">Apellido Materno</label>
                              <input type="text" class="form-control" id="AAAA" placeholder="Ingrese apellido materno" name="AAAA" value="{{old('AAAA')}}">
                              @error('AAAA')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="tipoUsuario">Tipo Usuario del Sistema</label>
                              <input type="text" class="form-control" id="tipoUsuario" placeholder="Ingrese tipo usuario" name="tipoUsuario" value="{{old('tipoUsuario')}}">
                              @error('tipoUsuario')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="text" class="form-control" id="email" placeholder="Ingrese email" name="email" value="{{old('email')}}">
                              @error('email')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="tipoDocumento">Tipo Documento</label>
                              <input type="text" class="form-control" id="tipoDocumento" placeholder="Ingrese tipo documento" name="tipoDocumento" value="{{old('tipoDocumento')}}">
                              @error('tipoDocumento')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="nroDocumento">Nro de Documento</label>
                              <input type="text" class="form-control" id="nroDocumento" placeholder="Ingrese nro de documento" name="nroDocumento" value="{{old('nroDocumento')}}">
                              @error('nroDocumento')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="pais">pais</label>
                              <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais" value="{{old('pais')}}">
                              @error('pais')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="genero">Genero</label>
                              <input type="text" class="form-control" id="genero" placeholder="Ingrese genero" name="genero" value="{{old('genero')}}">
                              @error('genero')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="estado">Estado</label>
                              <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" name="estado" value="{{old('estado')}}">
                              @error('estado')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="direccion">Direccion</label>
                              <input type="text" class="form-control" id="direccion" placeholder="Ingrese direccion" name="direccion" value="{{old('direccion')}}">
                              @error('direccion')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="telefono">Telefono</label>
                              <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono" name="telefono" value="{{old('telefono')}}">
                              @error('telefono')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="formacion_academica_id">Formacion Academica</label>
                              <select name="formacion_academica" id="" class="form-control">
                                  @foreach ($formacion as $f)
                                  <option value="{{$f->id}}">{{$f->gradoAcademico." - ".$f->universidad." - ".$f->anioTitulacion}}</option>
                                  @endforeach
                              </select>
                              @error('formacion_academica_id')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="area_id">Area</label>
                              <select name="area_id" class="form-control">
                                  @foreach ($areas as $area)
                                  <option value="{{$area->id}}">{{$area->nombre}}</option>
                                  @endforeach
                              </select>
                              @error('area_id')
                              <br>
                              <small>*{{$message}}</small>
                              <br>
                               @enderror
                          </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Registrar investigador</button>
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
