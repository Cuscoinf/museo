@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Registro Especimen</h1>
@stop

@section('content')


<div class="card card-dark card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="ornitologia-tab" data-toggle="pill" href="#ornitologia" role="tab" aria-controls="ornitologia" aria-selected="true">REGISTROS HERPETOLOGIA</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th>Codigo MHNC</th>
                      <th>Especie</th>
                      <th>Genero</th>
                      <th>Familia</th>
                      <th>Orden</th>
                      <th>Sexo</th>
                      <th>Tejido ADN</th>
                      <th>Tejido COD</th>
                      <th>Preservacion</th>
                      <th>Colector</th>
                      <th>Autor</th>
                      <th>Observacion</th>
                      <th>Foto</th>
                      <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                </tbody>
            </table>
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
