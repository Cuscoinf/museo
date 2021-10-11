@extends('adminlte::page')

@section('title', 'Dashboard')

@section('right-sidebar')
@stop

@section('content_header')
    <h1>Software de control Museo UNSAAC</h1>
@stop

@section('content')
<div id="app"></div>
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>200</h3>
            <p><a href="" class="text-white">Investigadores registrados</a></p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="" class="small-box-footer">Mas información <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>150</h3>
            <p>Especimenes registrados</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer">Nuevo Registro <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>44</h3>
            <p>Solicitudes pendientes de revisión</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer">Ver Solicitudes <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>65</h3>
            <p>Depositos observados</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer">Ver más <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="card bg-gradient-info">
          <div class="card-header border-0">
            <h3 class="card-title">
              <i class="fas fa-th mr-1"></i>
              Salidas a campo
            </h3>

            <div class="card-tools">
              <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>
          <!-- /.card-body -->
          <div class="card-footer bg-transparent">
            <div class="row">
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                       data-fgColor="#39CCCC">

                <div class="text-white">En campo</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                       data-fgColor="#39CCCC">

                <div class="text-white">Disponibles</div>
              </div>
              <!-- ./col -->
              <div class="col-4 text-center">
                <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                       data-fgColor="#39CCCC">

                <div class="text-white">Observados</div>
              </div>
              <!-- ./col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-footer -->
        </div>
      </div>
    </div>
  </div>
</section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
@stop
