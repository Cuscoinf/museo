@extends('adminlte::page')

@section('title', 'Investigador')

@section('content_header')
    <h1>Editar Investigador vl8</h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Editar Investigador</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{route('investigador.update',$investigador)}}" method="POST">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" placeholder="Ingrese nombre..." name="nombre" value="{{old('nombre',$investigador->nombre)}}">
                    @error('nombre')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="apPaterno">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apPaterno" placeholder="Ingrese apellido paterno" name="apPaterno" value="{{old('apPaterno',$investigador->apPaterno)}}">
                    @error('apPaterno')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="apMaterno">Apellido Materno</label>
                    <input type="text" class="form-control" id="apMaterno" placeholder="Ingrese apellido materno" name="apMaterno" value="{{old('apMaterno',$investigador->apMaterno)}}">
                    @error('apMaterno')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="tipoUsuario">Tipo Usuario</label>
                    <input type="text" class="form-control" id="tipoUsuario" placeholder="Ingrese tipo usuario" name="tipoUsuario" value="{{old('tipoUsuario',$investigador->tipoUsuario)}}">
                    @error('tipoUsuario')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email" placeholder="Ingrese email" name="email" value="{{old('email',$investigador->email)}}">
                    @error('email')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="tipoDocumento">Tipo Documento</label>
                    <input type="text" class="form-control" id="tipoDocumento" placeholder="Ingrese tipo documento" name="tipoDocumento" value="{{old('tipoDocumento',$investigador->tipoDocumento)}}">
                    @error('tipoDocumento')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="nroDocumento">Nro de Documento</label>
                    <input type="text" class="form-control" id="nroDocumento" placeholder="Ingrese nro de documento" name="nroDocumento" value="{{old('nroDocumento',$investigador->nroDocumento)}}">
                    @error('nroDocumento')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="pais">pais</label>
                    <input type="text" class="form-control" id="pais" placeholder="Ingrese pais" name="pais" value="{{old('pais',$investigador->pais)}}">
                    @error('pais')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="genero">Genero</label>
                    <input type="text" class="form-control" id="genero" placeholder="Ingrese genero" name="genero" value="{{old('genero',$investigador->genero)}}">
                    @error('genero')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input type="text" class="form-control" id="estado" placeholder="Ingrese estado" name="estado" value="{{old('estado',$investigador->estado)}}">
                    @error('estado')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" id="direccion" placeholder="Ingrese direccion" name="direccion" value="{{old('direccion',$investigador->direccion)}}">
                    @error('direccion')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input type="text" class="form-control" id="telefono" placeholder="Ingrese telefono" name="telefono" value="{{old('telefono',$investigador->telefono)}}">
                    @error('telefono')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="formacion_academica_id">Formacion Academica</label>
                    <input type="text" class="form-control" id="formacion_academica_id" placeholder="Ingrese formacion academica" name="formacion_academica_id" value="{{old('formacion_academica_id',$investigador->formacion_academica_id)}}">
                    @error('formacion_academica_id')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>
                <div class="form-group">
                    <label for="area_id">Area</label>
                    <input type="text" class="form-control" id="area_id" placeholder="Ingrese area" name="area_id" value="{{old('area_id',$investigador->area_id)}}">
                    @error('area_id')
                    <br>
                    <small>*{{$message}}</small>
                    <br>
                     @enderror
                </div>


            </div>

          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">Actualizar</button>
            <button type="submit" class="btn btn-default float-right">Cancel</button>
          </div>
          <!-- /.card-footer -->
        </form>
    </div>
@stop

@section('css')
        <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
        <script src="{{asset('js/app.js')}}"></script> <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
@stop

