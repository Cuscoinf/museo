@extends('layouts.panelinvestigador')
@section('contenido')
    <div class="card">
        <div class="card-header">Generar solicitud de investigación</div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="proyecto">Nombre de proyecto</label>
                    <input type="text" class="form-control" id="proyecto" name="proyecto">
                </div>
                <div class="form-group">
                    <label for="investigacion">Plan de Investigación</label>
                    <input type="text" class="form-control" id="investigacion" name="investigacion">
                </div>
                <div class="form-group">
                    <label for="colaboradores">Ficha de datos de los colaboradores</label>
                    <input type="text" class="form-control" id="colaboradores" name="colaboradores">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-dark">Enviar Solicitud</button>
                </div>
            </form>
        </div>
    </div>
@stop