@extends('adminlte::page')

@section('title', 'Roles')

@section('plugins.Sweetalert2', true)


@section('content_header')
    <h1>Asigar Roles y Permisos de Usuario: <strong>{{ $usuario->name }}</strong> </h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Asignar Rol y Permisos</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="form-horizontal" action="{{route('updateuser',$usuario)}}" method="POST">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Rol de Usuario actual: <span class="badge badge-success right">{{$usuario->rol}}</span> </label>
                            <br>
                            <label>Cambiar a:</label>
                            <select name="rol" class="form-control select2 select2-hidden-accessible" style="width: 100%;" aria-hidden="true">
                                <option>Curador</option>
                                <option>Investigador</option>
                                <option>Director</option>
                                <option>Jefe de Area</option>
                                <option>Administrador</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-info">Guardar Cambios</button>
                    </form>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <div id="app" class="content">
        <form-permisos :usuario="{{ $usuario }}"></form-permisos>
    </div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/vendor/dist/css/adminlte.css" -->
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{--<script src="{{ asset('js/app.js') }}"></script>--}}
    <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 1500,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

    </script>

@stop
