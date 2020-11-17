@extends('adminlte::page')

@section('title', 'Dashboard')

@section('right-sidebar')
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">{{Auth::user()->rol}}</li>
    <!-- Optionally, you can add icons to the links -->
    <li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
    <li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
      <ul class="treeview-menu">
        <li><a href="#">Link in level 2</a></li>
        <li><a href="#">Link in level 2</a></li>
      </ul>
    </li>
  </ul>
@stop
@section('content_header')
    <h1>Sistema de registro - Museo de Historia</h1>
@stop

@section('content')
    <p>Bienvenido.</p>
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Actividades recientes</h3>

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
          <ul class="products-list product-list-in-card pl-2 pr-2">
            <li class="item">
              <div class="product-img">
                <img src="https://picsum.photos/300/300" alt="Product Image" class="img-size-50">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">Usuarios Creado
                  <span class="badge badge-warning float-right">3</span></a>
                <span class="product-description">
                  Roles y permisos de usuario
                </span>
              </div>
            </li>
            <!-- /.item -->
            <li class="item">
              <div class="product-img">
                <img src="https://picsum.photos/300/300" alt="Product Image" class="img-size-50">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">Areas
                  <span class="badge badge-info float-right">1</span></a>
                <span class="product-description">
                  Areas en actualizacion
                </span>
              </div>
            </li>
            <!-- /.item -->
            <li class="item">
              <div class="product-img">
                <img src="https://picsum.photos/300/300" alt="Product Image" class="img-size-50">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">
                  Investigadores <span class="badge badge-danger float-right">
                  3
                </span>
                </a>
                <span class="product-description">
                  Registro de nuevos investigadores
                </span>
              </div>
            </li>
            <!-- /.item -->
            <li class="item">
              <div class="product-img">
                <img src="https://picsum.photos/300/300" alt="Product Image" class="img-size-50">
              </div>
              <div class="product-info">
                <a href="javascript:void(0)" class="product-title">Accesos
                  <span class="badge badge-success float-right">1</span></a>
                <span class="product-description">
                  Inici Session para realizar acciones
                </span>
              </div>
            </li>
            <!-- /.item -->
          </ul>
        </div>
        <!-- /.card-body -->
        <div class="card-footer text-center">
          <a href="javascript:void(0)" class="uppercase">Ver todas las actividades</a>
        </div>
        <!-- /.card-footer -->
      </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
@stop
