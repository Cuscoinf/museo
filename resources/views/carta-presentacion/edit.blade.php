@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear Carta de presentación </h1>
@stop

@section('content')

    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Carta de Presentacion</h3>
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
                    <label for="investigador">Investigador:</label>
                    <input type="text" class="form-control" id="investigador" placeholder="Ingrese investigador" name="investigador"
                    value="{{old('nombre',$investigador->nombre.' '.$investigador->apPaterno.' '.$investigador->apMaterno)}}">
                    <input type="hidden" name="investigador_id" value="{{$investigador->id}}">
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
                    <label for="hojaVida">Adjuntar hoja de Vida </label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="hojaVida">Adjuntar Plan de investigación </label>
                    <input type="file" class="form-control">
                </div>
                <div class="form-group">
                    <label for="contenido">Contenido de la carta:</label>
                    <textarea name="contenido" id="contenido" class="form-control" style="height: 180px">
                        <p class="contenido">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mediante
                        la presente certifico que la MSc. <strong id="cNombre">{{$investigador->nombre.' '.$investigador->apPaterno.' '.$investigador->apMaterno}}</strong>
                            identificada con <strong>DNI {{$investigador->nroDocumento}}</strong>, es Investigadora Asociada del Museo de Historia Natural de
                            la Universidad Nacional de San Antonio Abad del Cusco. La Srta. Delgado participará como
                        investigador principal del proyecto "<strong id="cProyecto"></strong>" respaldado por el Museo de Historia Natural de la
                            Universidad Nacional de San Antonio Abad - MHNC (Cusco, Perú) en la que además participan los investigadores
                            asociados al MHNC, que se identifican a continuación:</p>

                        <table class="table table-bordered" style="width: 500px">
                            <tbody>
                                <tr>
                                    <td>Nombres</td>
                                    <td>DNI</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="contenido">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estoy
                            convencida de que este proyecto de investigación contribuirá al conocimiento la fauna de vertebrados de la
                            región y brindará información relevante para su conservación. Por lo que suscribo este documento a petición de
                            los interesados para los tramites de permiso de investigación y colecta necesarios para la ejecución del
                            proyecto.
                        </p>
                    
                        <p>Sin otro particular me despido renovando ante Ud. mi aprecio y estima personal.
                        </p>
                    
                        <p class="despedida">Atentamente.</p>
                    </textarea>
                    @error('contenido')
                    <br>
                    <small>*{{ $message }}</small>
                    <br>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" formtarget="_blank" class="btn btn-info">Generar Carta</button>
                </div>

            </div>
        </form>
        <!-- a class="btn btn-info" target="_blank" href="{{ URL::to('/carta-presentacion/generarpdf') }}">Export to PDF</a -->


    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote.min.css" integrity="sha256-n3YISYddrZmGqrUgvpa3xzwZwcvvyaZco0PdOyUKA18=" crossorigin="anonymous" />
@stop

@section('js')
<script src="{{asset('js/editor.js')}}"></script>

<script>
    $(function() {
        $("#contenido").summernote();
        $("#proyecto").on("input", function(){
            $("#cProyecto").text($("#proyecto").val())
        })
    })
  </script>
@stop
