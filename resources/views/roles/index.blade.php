@extends('adminlte::page')

@section('title', 'Roles')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Roles de Usuario</h1>
@stop

@section('content')

<div class="card">
    <div class="card-header border-transparent">
      <h3 class="card-title">Usuarios</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table m-0">
          <thead>
          <tr>
            <th>User ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Rol</th>
          </tr>
          </thead>
          <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{$usuario->id}}</a></td>
                    <td>{{$usuario->name}}</td>
                    <td>{{$usuario->email}}</td>
                    <td><span class="badge badge-success">{{$usuario->rol}}</span></td>
                    <td><a class="btn btn-block bg-gradient-info btn-sm" href="{{ route('asignar-roles',$usuario) }}">Editar Rol</a></td>
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.table-responsive -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modal-lg">
    ..
</button>
  <div id="app" class="content">
    <form-roles usuario="{{Auth::user()->menus}}" ></form-roles>

</div>
@stop

@section('css')
    <!--link rel="stylesheet" href="/vendor/dist/css/adminlte.css" -->
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->

@stop
