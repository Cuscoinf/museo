@extends('layouts.panelinvestigador')
@section('contenido')
<div class="container">
<div class="form">
    <div class="row">
        <div class="col-md-3">
            <div class="menulat">
                <ul>
                    <li><a href="solicitar-investigacion">Solicitar Investigacion</a></li>
                    <li><a href="solicitar-deposito">Solicitar Deposito</a></li>
                    <li><a href="depositar-especimen">Depositar Especimen</a></li>
                    <li><a href="mi-cuenta">Mi Perfil</a></li>
                    <li><a href="notificaciones">Notificaciones <span class="badge badge-primary">3</span> </a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            Paneles
        </div>
    </div>
</div>
</div>
@stop