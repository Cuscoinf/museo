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
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Permiso Investigador</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Registrar Permiso </h3>
                </div>
                <form action="">
                    <div class="card-body row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="investigador">Seleccione Investigador</label>
                                <select name="investigador" id="investigador" class="form-control">
                                    @foreach ($investigadores as $investigador)
                                    <option value="{{$investigador->id}}">{{$investigador->nombre." ".$investigador->apPaterno." ".$investigador->apMaterno}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="numeroPermiso">Numero resolución por SERFOR</label>
                                <input class="form-control" type="text" name="nroResolucion" placeholder="Ingrese numero de resolución">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary"><i class="fas fa-user-check"></i> Asignar codigo a investigador</button>
                        </div>
                    </div>
                </form>
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
