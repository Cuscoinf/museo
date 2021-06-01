@extends('layouts.panelinvestigador')
@section('contenido')
    <div class="card">
        <div class="card-header">Reportar Caso Fortuito</div>
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
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="lugar"> Lugar de investigacion</label>
                            <input type="text" name="lugar" id="lugar" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fechaInvestigacion"> Fecha de investigacion</label>
                            <input type="date" id="fechaInvestigacion" name="fechaInvestigacion" class="form-control">
                        </div>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label for="investigacion"> Area</label>
                    <select name="" id="" class="form-control">
                        <option value="maztozoologia">Maztozoologia</option>
                        <option value="ornitologia">Ornitologia</option>
                        <option value="herpetologia">Herpetologia</option>
                    </select>
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-dark">Reportar</button>
                </div>
            </form>
        </div>
    </div>
@stop