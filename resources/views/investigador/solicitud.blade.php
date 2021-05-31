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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lugar">Lugar de investigación</label>
                            <input type="text" class="form-control" id="lugar" name="lugar">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fecha">Fecha de investigación</label>
                            <input type="date" class="form-control" id="fecha" name="fecha">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="investigacion" class="btn btn-light"><i class="fa fa-file"></i> Cargar plan de investigación</label>
                    <input type="file" id="investigacion" name="planInvestigacion" style="display: none">
                </div>
                <div class="form-group">
                    <label for="colaboradores" class="btn btn-light"><i class="fa fa-file"></i> Cargar Ficha de datos de los colaboradores</label>
                    <input type="file" id="colaboradores" name="fichaColaboradores" style="display: none">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-dark">Enviar Solicitud</button>
                </div>
            </form>
        </div>
    </div>
@stop