@extends('layouts.museoweb')
@section('contenido')
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Solicitud de Investigacion
                </h1>	
                <p class="text-white link-nav"><a href="{{route('web')}}">Inicio </a>  <span class="lnr lnr-arrow-right"></span>  <a href="{{route('solicitud-investigacion')}}"> Solicitud de investigacion</a></p>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="form-solicitud" style="padding: 25px">
        <h3 style="padding: 35px 0 45px 0">Solicitud para proyecto de investigación</h3>
        <form action="{{route('generar.solicitud')}}" style="margin: auto; width: 500px">
            @csrf
            <div class="form-group">
                <label for="Nombres">Nombres</label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="apPaterno">Apellido Paterno</label>
                <input type="text" class="form-control" id="apPaterno" name="apPaterno">
            </div>
            <div class="form-group">
                <label for="apMaterno">Apellido Materno</label>
                <input type="text" class="form-control" id="apMaterno" name="apMaterno">
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni">
            </div>
            <div class="form-group">
                <label for="email">Correo electronico</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="estado">Estado civil</label>
                <select name="estado" id="estado" class="form-control">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            <div class="form-group">
                <label for="condicion">Condicion</label>
                <select name="condicion" id="condicion" class="form-control">
                    <option value="Investigador">Investigador</option>
                    <option value="Tesista">Tesista</option>
                </select>
            </div>
            <div class="form-group">
                <label for="proyecto">Nombre del Proyecto</label>
                <input type="text" class="form-control" id="proyecto" name="proyecto">
            </div>
            <div class="form-group">
                <label for="lugar">Lugar de investigacion</label>
                <input type="text" class="form-control" id="lugar" name="lugar">
            </div>
            <div class="form-group">
                <label for="planinvestigacion" class="btn btn-success"><i class="fa fa-file"></i> Plan de investigacion</label>
                <input type="file" id="planinvestigacion" name="planinvestigacion" style="display: none">
            </div>
            <div class="form-group">
                <label for="hojadevida" class="btn btn-success"><i class="fa fa-file"></i> Adjuntar hoja de vida</label>
                <input type="file" id="hojadevida" style="display:none" name="hojadevida">
            </div>
            <div class="form-group">
                <label for="fichadatos" class="btn btn-success"><i class="fa fa-file"></i> Adjunte ficha de datos de los colaboradores</label>
                <input type="file" id="fichadatos" name="fichadatos" style="display: none">
            </div>
            <div class="form-group text-center">
                <button class="btn btn-primary"><i class="fa fa-upload"></i> ENVIAR SOLICITUD</button>
            </div>
        </form>
    </div>
</section>
@endsection