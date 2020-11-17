@extends('adminlte::page')

@section('title', 'Investigador')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Investigador vl8</h1>
@stop

@section('content')


    <!-- Button trigger modal -->

    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-lg">
        Registrar Nuevo Investigador
    </button>


    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Investigadores</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Paterno</th>
                <th>Materno</th>
                <th>Tipo Usuario</th>
                <th>Tipo Documento</th>
                <th>Nro Documento</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Actualizacion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($investigadores as $investigador)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$investigador->nombre}}</td>
                        <td>{{$investigador->apPaterno}}</td>
                        <td>{{$investigador->apMaterno}}</td>
                        <td>{{$investigador->tipoUsuario}}</td>
                        <td>{{$investigador->tipoDocumento}}</td>
                        <td>{{$investigador->nroDocumento}}</td>
                        <td>{{$investigador->created_at}}</td>
                        <td>{{$investigador->updated_at}}</td>
                        <td>
                            <form action="{{ route('investigador.destroy',$investigador) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('investigador.show',$investigador) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('investigador.edit',$investigador) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-confirm" id="button-delete" class="button delete-confirm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>


    <!-- /.modal-content -->
      <!-- Modal -->
      <div class="modal fade show" id="modal-lg" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header bg-info">
              <h4 class="modal-title">Registrar Nuevo Investigador</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" action="{{route('investigador.store')}}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre..." name="nombre" value="{{old('nombre')}}">
                            @error('nombre')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="apPaterno">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese apellido paterno" name="apPaterno" value="{{old('apPaterno')}}">
                            @error('apPaterno')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="apMaterno">Apellido Materno</label>
                            <input type="text" class="form-control" id="apMaterno" placeholder="Ingrese apellido materno" name="apMaterno" value="{{old('apMaterno')}}">
                            @error('apMaterno')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipoUsuario">Tipo Usuario del Sistema</label>
                            <input type="text" class="form-control" id="tipoUsuario" placeholder="Ingrese tipo usuario" name="tipoUsuario" value="{{old('tipoUsuario')}}">
                            @error('tipoUsuario')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" placeholder="Ingrese email" name="email" value="{{old('email')}}">
                            @error('email')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="tipoDocumento">Tipo Documento</label>
                            <input type="text" class="form-control" id="tipoDocumento" placeholder="Ingrese tipo documento" name="tipoDocumento" value="{{old('tipoDocumento')}}">
                            @error('tipoDocumento')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="nroDocumento">Nro de Documento</label>
                            <input type="text" class="form-control" id="nroDocumento" placeholder="Ingrese nro de documento" name="nroDocumento" value="{{old('nroDocumento')}}">
                            @error('nroDocumento')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="pais">pais</label>
                            <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais" value="{{old('pais')}}">
                            @error('pais')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="genero">Genero</label>
                            <input type="text" class="form-control" id="genero" placeholder="Ingrese genero" name="genero" value="{{old('genero')}}">
                            @error('genero')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" name="estado" value="{{old('estado')}}">
                            @error('estado')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ingrese direccion" name="direccion" value="{{old('direccion')}}">
                            @error('direccion')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono" name="telefono" value="{{old('telefono')}}">
                            @error('telefono')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="formacion_academica_id">Formacion Academica</label>
                            <input type="text" class="form-control" id="formacion_academica_id" placeholder="Ingrese formacion academica" name="formacion_academica_id" value="{{old('formacion_academica_id')}}">
                            @error('formacion_academica_id')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="area_id">Area</label>
                            <input type="text" class="form-control" id="area_id" placeholder="Ingrese area" name="area_id" value="{{old('area_id')}}">
                            @error('area_id')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>


                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-info">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>

            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
