@extends('adminlte::page')

@section('title', 'Areas')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Areas 8</h1>
@stop

@section('content')
<!--
    <h1>Areas</h1>
    <a href="{{route('area.create')}}">Crear Area</a>
    <ul>
        @foreach ($areas as $area)
            <li><a href="{{route('area.show',$area)}}">{{$area->nombre}}</a></li>
        @endforeach
    </ul>
    {{$areas->links()}}
-->

    <!-- a href="{{route('area.create')}}" class="btn btn-success">Crear Nueva Area</a -->
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-lg">
        Crear Area
    </button>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Areas del museo de historia</h3>
        </div>

        <!-- /.card-header -->
        <!--div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th style="width: 10px">#</th>
                <th>Nombre</th>
                <th>Fecha de Creacion</th>
                <th>Fecha de Actualizacion</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$area->nombre}}</td>
                        <td>{{$area->created_at}}</td>
                        <td>{{$area->updated_at}}</td>
                        <td>
                            <form action="{{ route('area.destroy',$area) }}" method="POST">

                                <a class="btn btn-info" href="{{ route('area.show',$area) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('area.edit',$area) }}">Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger delete-confirm" id="button-delete" class="button delete-confirm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div -->
        <div id="app" class="content">
            <list-area></list-area>
            </div>
        <!-- /.card-body -->
    </div>


    <!-- /.modal-content -->
      <!-- Modal -->
      <div class="modal fade show" id="modal-lg" style="display: none; padding-right: 16px;" aria-modal="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content" >
            <div class="modal-header bg-info">
              <h4 class="modal-title">Crear Nueva Area</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">

                <div id="app" class="content">
                <form-create-area></form-create-area>

                </div>
                <!--form class="form-horizontal" action="{{route('area.store')}}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre" name="nombre" value="{{old('nombre')}}">
                            @error('nombre')
                            <br>
                            <small>*{{$message}}</small>
                            <br>
                             @enderror
                        </div>
                        <div class="form-group">
                            <label for="slug">Slug</label>
                            <input type="text" class="form-control" id="slug" placeholder="Ingrese slug" name="slug" value="{{old('slug')}}">
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="submit" class="btn btn-info">Guardar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    </div>
                </form -->

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
<script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
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
