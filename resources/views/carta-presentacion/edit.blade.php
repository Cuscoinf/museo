@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Carta de presentación </h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Horizontal Form</h3>
        </div>

        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('carta.generarpdf') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="nro_carta">Nro Carta:</label>
                    <input type="text" class="form-control" id="nro_carta" placeholder="Ingrese nro_carta" name="nro_carta"
                        value="c001">
                    @error('nro_carta')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nro_solicitud">Nro Solicitud:</label>
                    <input type="text" class="form-control" id="nro_solicitud" placeholder="Ingrese nro_solicitud"
                        name="nro_solicitud" value="{{ old('nro_solicitud') }}">
                    @error('nro_solicitud')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="destinatario">Destinatario: Sr(a).</label>
                    <input type="text" class="form-control" id="destinatario" placeholder="Ingrese destinatario"
                        name="destinatario" value="Mirbel Epiquien Rivera">
                    @error('destinatario')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo:</label>
                    <input type="text" class="form-control" id="cargo" placeholder="Ingrese cargo" name="cargo"
                        value="Director General de Gestión Sostenible del Patrimonio Forestal y de Fauna Silvestre">
                    @error('cargo')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="investigador_id">Investigador:</label>
                    <input type="text" class="form-control" id="investigador_id" placeholder="Ingrese investigador_id" name="investigador_id"
                    value="{{old('nombre',$investigador->nombre.' '.$investigador->apPaterno.' '.$investigador->apMaterno)}}">
                    @error('investigador_id')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="proyecto">Proyecto:</label>
                    <input type="text" class="form-control" id="proyecto" placeholder="Ingrese proyecto" name="proyecto"
                        value="{{ old('proyecto') }}" required>
                    @error('proyecto')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lugar">Lugar:</label>
                    <input type="text" class="form-control" id="lugar" placeholder="Ingrese lugar" name="lugar"
                        value="{{ old('lugar') }}">
                    @error('lugar')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido de la carta:</label>
                    <p name="contenido" value="{{ old('contenido') }}">
                        Mediante la presente certifico que la  MSc. <strong>Jackeline Amanda Delgado Cornejo</strong> identificada
                        con DNI 42175705, es Investigadora Asociada del Museo de Historia Natural de la Universidad Nacional
                        de San Antonio Abad del Cusco. La Srta. Delgado participará como investigador principal del proyecto
                        <strong> “Estructura de la comunidad de vertebrados en los sistemas ecológicos de las A.C.P. Machusaniaca y A.C.P.
                            Cadena: una comparación entre aves, mamíferos y anfibios”</strong> respaldado por el Museo de Historia
                            Natural de la Universidad Nacional de San Antonio Abad - MHNC (Cusco, Perú) en la que además participan
                            los investigadores asociados al MHNC, que se identifican a continuación:
                    </p>
                    @error('contenido')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <button type="submit" formtarget="_blank" class="btn btn-info">Generar Carta</button>

            </div>
        </form>
        <!-- a class="btn btn-info" target="_blank" href="{{ URL::to('/carta-presentacion/generarpdf') }}">Export to PDF</a -->


    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <!--Añadimos el js generado con webpack, donde se encuentra nuestro componente vuejs-->
@stop
