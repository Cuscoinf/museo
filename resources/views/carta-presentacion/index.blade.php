@extends('adminlte::page')

@section('title', 'Carta de presentacion')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Cartas de Presentación</h1>
@stop

@section('content')

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Cartas generadas</h3>
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
                        <td>
                                <a class="btn btn-primary" href="{{ route('carta.edit',$investigador->id) }}">Generar Carta de Presentacion</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
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
