@extends('layouts.panelinvestigador')
@section('contenido')
    <div class="card">
        <div class="card-header">Generar solicitud de deposito</div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="proyecto">Nombre del Proyecto</label>
                    <input type="text" class="form-control" id="proyecto" name="proyecto">
                </div>
                <div class="form-group">
                    <label for="investigacion" class="btn btn-light"><i class="fa fa-file"></i> Cargar hoja de SERFOR</label>
                    <input type="file" id="investigacion" name="planInvestigacion" style="display: none">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-dark">Enviar Solicitud</button>
                </div>
            </form>
        </div>
    </div>
@stop