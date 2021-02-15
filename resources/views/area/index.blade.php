@extends('adminlte::page')

@section('title', 'Areas')

@section('plugins.Sweetalert2', true)


@section('content_header')
    <h1>Sistema de registro</h1>
@stop

@section('content')
<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Registrar Area</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">Registro de areas</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('area.store')}}" method="POST">
                        @csrf
                        <label>
                            Nombre del área:
                            <br>
                            <input type="text" name="nombre" class="form-control" value="{{@$area->nombre}}">
                        </label>
                        <label>
                            <br>
                            <input type="text" name="slug" class="form-control" hidden>
                        </label>
                        <br>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Registrar área</button>
                    </form>
                </div>
                <div class="card-body p-0">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th style="width: 10px">#</th>
                            <th>Nombre del area</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($areas as $area)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$area->nombre}}</td>
                                <td>
                                <form action="{{ route('area.destroy',$area->id) }}" method="POST">
                                    <a class="btn btn-primary" href="{{ route('area.edit',$area) }}">Editar</a>
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

</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
    <script>
        $('#button-delete').on('click', function(e) {
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
