@extends('layouts.panelinvestigador')
@section('contenido')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div>
                <a style="height: 200px; margin-bottom:30px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('solicitarInvestigacion')}}">
                    Solicitar Investigacion
                </a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a style="height: 200px; margin-bottom:30px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('solicitarDeposito')}}">Solicitar Deposito</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a style="height: 200px; margin-bottom:30px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('depositarEspecimen')}}">Depositar Especimen</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a style="height: 200px; margin-bottom:30px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('depositarEspecimen')}}">Caso Fortuito</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a style="height: 200px; margin-bottom:30px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('depositarEspecimen')}}">Animales Decomisados</a>
            </div>
        </div>
        <div class="col-md-4">
            <div>
                <a style="height: 200px; margin-bottom:30px; color:grey; font-size:17px; border:1px solid #ccc; text-align:center; border-radius:10px; background:white; display:grid; align-items:center" href="{{route('notificaciones')}}">Notificaciones</a>
            </div>
        </div>
    </div>
</div>
@stop