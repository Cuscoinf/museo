@extends('adminlte::page')

@section('title', 'Areas')

@section('plugins.Sweetalert2', true)


@section('content_header')
    <h1>Sistema de registro</h1>
@stop

@section('content')


    <div class="card">
        <div class="card-header">
            <h3 class="card-title text-center">Areas del museo de historia</h3>
        </div>


        <div id="app" class="content">
            <list-area usuario="{{Auth::user()->rol}}" :permisos="{{ json_encode($menuPermisos) }}"></list-area>

        </div>
        <!-- /.card-body -->
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
