@extends('adminlte::page')

@section('title', 'Formacion Academica')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Sistema de registro</h1>
@stop

@section('content')


    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-lg">
        Crear Nueva Formación Academica
    </button>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Formaciones Academicas</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Grado Academico</th>
                <th>Universidad</th>
                <th>Pais</th>
                <th>Año Titulacion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($formacionesAcademicas as $formacion_academica)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$formacion_academica->gradoAcademico}}</td>
                        <td>{{$formacion_academica->universidad}}</td>
                        <td>{{$formacion_academica->pais}}</td>
                        <td>{{$formacion_academica->añoTitulacion}}</td>
                        <td>
                            <form action="{{ route('formacion-academica.destroy',$formacion_academica) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('formacion-academica.show',$formacion_academica) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('formacion-academica.edit',$formacion_academica) }}">Edit</a>

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
              <h4 class="modal-title">Crear Nueva Formacion</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <form class="form-horizontal" action="{{route('formacion-academica.store')}}" method="POST">
                    @csrf
                    <div class="card-body">

                        <div class="form-group">
                            <label for="gradoAcademico">Grado Academico</label>
                            <input type="text" class="form-control" id="gradoAcademico" placeholder="Ingrese grado academico" name="gradoAcademico" value="{{old('gradoAcademico')}}">
                            @error('gradoAcademico')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="universidad">Universidad</label>
                            <input type="text" class="form-control" id="universidad" placeholder="Ingrese Universidad" name="universidad" value="{{old('universidad')}}">
                            @error('universidad')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="pais">Pais</label>
                            <input type="text" class="form-control" id="pais" placeholder="Ingrese grado academico" name="pais" value="{{old('pais')}}">
                            @error('pais')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="añoTitulacion">Año Titulación</label>
                            <input type="text" class="form-control" id="añoTitulacion" placeholder="Ingrese grado academico" name="añoTitulacion" value="{{old('añoTitulacion')}}">
                            @error('añoTitulacion')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug" hidden>Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Ingrese slug" name="slug" value="{{old('slug')}}" hidden>
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
