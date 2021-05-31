@extends('layouts.panelinvestigador')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div>
                <a style="height: 250px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('solicitarInvestigacion')}}">
                    Solicitar Investigacion
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <a style="height: 250px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('solicitarDeposito')}}">Solicitar Deposito</a>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <a style="height: 250px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('depositarEspecimen')}}">Depositar Especimen</a>
            </div>
        </div>
        <div class="col-md-3">
            <div>
                <a style="height: 250px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('notificaciones')}}">Notificaciones</a>
            </div>
        </div>
    </div>
</div>
@stop