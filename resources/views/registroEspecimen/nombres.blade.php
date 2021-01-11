@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Registro Especimen</h1>
@stop

@section('content')


<div class="card card-primary card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Registrar Especimen</a>
            </li>
        </ul>
    </div>
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
        <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
            <div class="card">
                <div class="card-header">
                  <h4 class="modal-title">registro de Nombres</h4>
                </div>
                <div class="card-body">
                 <form class="form-horizontal" action="{{route('guardarNombreEspecimen')}}" method="POST">
                      @csrf
                      <div class="card-body row">
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="nombre">Especie</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre..." name="nombre" value="{{old('especie')}}">
                                @error('nombre')
                                <br>
                                <small>*{{$message}}</small>
                                <br>
                                 @enderror
                            </div>
                          </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                                <label for="cnMHNC">Nombres</label>
                                <input type="text" class="form-control" id="cnMHNC" placeholder="C" name="cnMHNC" value="{{old('nombres')}}">
                            </div>
                          </div>
                      </div>
                      <div class="text-center">
                          <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Guardar</button>
                      </div>
                  </form>
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
@stop
