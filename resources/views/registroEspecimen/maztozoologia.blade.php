@extends('adminlte::page')

@section('title', 'registroEspecimen')

@section('plugins.Sweetalert2',true)


@section('content_header')
    <h1>Registro Especimen</h1>
@stop

@section('content')


<div class="card card-dark card-tabs">
    <div class="card-header p-0 pt-1">
        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="ornitologia-tab" data-toggle="pill" href="#ornitologia" role="tab" aria-controls="ornitologia" aria-selected="true">MAZTOZOOLOGIA</a>
            </li>
        </ul>
    </div>
    @if(Session::has('mensaje'))
    <div class="alert alert-success "><button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span></button>{{Session::get('mensaje')}}
    </div>
    @endif
    <div class="card-body">
        <div class="tab-content" id="custom-tabs-one-tabContent">
          <div class="tab-pane fade show active" id="ornitologia" role="tabpanel" aria-labelledby="ornitologia-tab">
              <div class="card">
                  <form class="form-horizontal" action="{{route('guardar.Maztozoologia')}}" method="POST">
                        @csrf
                      <div class="card-body">
                          <fieldset style="border: 1px solid #ccc">
                            <legend style="
                              display: inline-block;
                              width: auto;
                              padding: 1px 8px;
                              border: 1px solid #ccc;
                              border-radius: 5px;
                              font-size: 14px;
                              font-weight: 600;
                              position: relative;
                              left: -1px;
                          ">Taxonomía</legend>
                          <div class="card-body row">
                            <div class="col-md-6">
                              <label for="fauna">Fauna Silvestre</label>
                              <input type="radio" id="fauna" value="fauna" name="dbespecimen">
                            </div>
                            <div class="col-md-6">
                              <label for="local">Registro local</label>
                              <input type="radio" value="local" id="local" name="dbespecimen">
                            </div>                                
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="especie">Especie</label>
                                  <input type="text" class="form-control" id="especie" name="especie" value="{{old('especie')}}">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                  <label for="genero">Género</label>
                                  <input type="text" class="form-control" id="genero" name="genero" value="{{old('genero')}}">
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                  <label for="familia">Familia</label>
                                  <input type="text" class="form-control" id="familia" name="familia" value="{{old('familia')}}">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                  <label for="orden">Orden</label>
                                  <input type="text" class="form-control" id="orden" name="orden" value="{{old('orden')}}">
                              </div>
                            </div>
                            <div class="col-md-2">
                              <div class="form-group">
                                  <label for="clase">Clase</label>
                                  <input type="text" class="form-control" id="clase" name="clase" value="{{old('clase')}}">
                              </div>
                            </div>
                          </div>
                        </fieldset>
                      </div>
                      <div class="card-body row">
                        <div class="col-md-8">
                          <fieldset style="border: 1px solid #ccc">
                            <legend style="
                            display: inline-block;
                            width: auto;
                            padding: 1px 8px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            font-size: 14px;
                            font-weight: 600;
                            position: relative;
                            left: -1px;
                            ">Registro de colecta</legend>
                            <div class="card-body row">
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tipoCaptura">Tipo de captura</label>
                                    <select name="tipoCaptura" id="tipoCaptura" class="form-control">
                                      <option value="Temporal">Captura temporal</option>
                                      <option value="Con captura">Con captura</option>
                                      <option value="Sin Captura">Sin captura</option>
                                    </select>
                                </div>
                              </div>                                      
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="codMuseo">Codigo MHNC</label>
                                    <input type="text" class="form-control" id="codMuseo"  name="codMuseo" value="{{old('codMuseo')}}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="colector">Colector</label>
                                    <input type="text" class="form-control" id="colector" name="colector" value="{{old('colector')}}">
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="identificador">Identificador</label>
                                    <input type="text" class="form-control" id="identificador" name="identificador" value="{{old('identificador')}}">
                                </div>
                              </div>
                              
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tipoMuestra">Tipo de muestra</label>
                                    <input type="text" class="form-control" id="tipoMuestra" name="tipoMuestra" value="{{old('tipoMuestra')}}">
                                </div>
                              </div>

                              <div class="col-md-3">
                                <div class="form-group">
                                  <label for="sexo">Sexo</label>
                                  <select name="sexo" id="sexo" class="form-control">
                                    <option value="M">Macho</option>
                                    <option value="H">Hembra</option>
                                    <option value="I">No definido</option>
                                  </select>
                                </div>
                              </div>
                              
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cabezaCuerpo">Cabeza-Cuerpo</label>
                                    <input type="text" class="form-control" id="cabezaCuerpo"  name="cabezaCuerpo" value="{{old('cabezaCuerpo')}}">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="cola">Cola</label>
                                    <input type="text" class="form-control" id="cola" name="cola" value="{{old('cola')}}">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="oreja">Oreja</label>
                                    <input type="text" class="form-control" id="oreja"  name="oreja" value="{{old('oreja')}}">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="tarso">Tarso</label>
                                    <input type="text" class="form-control" id="tarso"  name="tarso" value="{{old('tarso')}}">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="trago">Trago</label>
                                    <input type="text" class="form-control" id="trago"  name="trago" value="{{old('trago')}}">
                                </div>
                              </div>
                              <div class="col-md-3">
                                <div class="form-group">
                                    <label for="antebrazo">Antebrazo</label>
                                    <input type="text" class="form-control" id="antebrazo"  name="antebrazo" value="{{old('antebrazo')}}">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                    <label for="ala">Ala</label>
                                    <input type="text" class="form-control" id="ala"  name="ala" value="{{old('ala')}}">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                    <label for="pie">Pie</label>
                                    <input type="text" class="form-control" id="pie"  name="pie" value="{{old('pie')}}">
                                </div>
                              </div>
                              <div class="col-md-2">
                                <div class="form-group">
                                    <label for="peso">Peso</label>
                                    <input type="text" class="form-control" id="peso"  name="peso" value="{{old('peso')}}">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="observaciones">Observaciones</label>
                                    <textarea class="form-control" id="observaciones"  name="observaciones">{{old('observaciones')}}</textarea>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                    <label for="foto">Foto</label>
                                    <input type="file" id="foto" placeholder="Ingrese Foto" name="foto" value="{{old('foto')}}" style="display: none">
                                    <button class="btn btn-primary" style="display: block"><i class="fa fa-upload"></i> Cargar Foto</button>
                                </div>
                              </div>
                            </div>
                          </fieldset>
                        </div>
                        <div class="col-md-4">
                          <fieldset style="border: 1px solid #ccc">
                            <legend style="
                            display: inline-block;
                            width: auto;
                            padding: 1px 8px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            font-size: 14px;
                            font-weight: 600;
                            position: relative;
                            left: -1px;
                            ">Lugar de colecta</legend>
                            <div class="card-body row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="pais">Pais</label>
                                  <select name="pais" class="form-control" id="pais" name="pais">
                                    <option value="Afganistán" id="AF">Afganistán</option>
                                    <option value="Albania" id="AL">Albania</option>
                                    <option value="Alemania" id="DE">Alemania</option>
                                    <option value="Andorra" id="AD">Andorra</option>
                                    <option value="Angola" id="AO">Angola</option>
                                    <option value="Anguila" id="AI">Anguila</option>
                                    <option value="Antártida" id="AQ">Antártida</option>
                                    <option value="Antigua y Barbuda" id="AG">Antigua y Barbuda</option>
                                    <option value="Antillas holandesas" id="AN">Antillas holandesas</option>
                                    <option value="Arabia Saudí" id="SA">Arabia Saudí</option>
                                    <option value="Argelia" id="DZ">Argelia</option>
                                    <option value="Argentina" id="AR">Argentina</option>
                                    <option value="Armenia" id="AM">Armenia</option>
                                    <option value="Aruba" id="AW">Aruba</option>
                                    <option value="Australia" id="AU">Australia</option>
                                    <option value="Austria" id="AT">Austria</option>
                                    <option value="Azerbaiyán" id="AZ">Azerbaiyán</option>
                                    <option value="Bahamas" id="BS">Bahamas</option>
                                    <option value="Bahrein" id="BH">Bahrein</option>
                                    <option value="Bangladesh" id="BD">Bangladesh</option>
                                    <option value="Barbados" id="BB">Barbados</option>
                                    <option value="Bélgica" id="BE">Bélgica</option>
                                    <option value="Belice" id="BZ">Belice</option>
                                    <option value="Benín" id="BJ">Benín</option>
                                    <option value="Bermudas" id="BM">Bermudas</option>
                                    <option value="Bhután" id="BT">Bhután</option>
                                    <option value="Bielorrusia" id="BY">Bielorrusia</option>
                                    <option value="Birmania" id="MM">Birmania</option>
                                    <option value="Bolivia" id="BO">Bolivia</option>
                                    <option value="Bosnia y Herzegovina" id="BA">Bosnia y Herzegovina</option>
                                    <option value="Botsuana" id="BW">Botsuana</option>
                                    <option value="Brasil" id="BR">Brasil</option>
                                    <option value="Brunei" id="BN">Brunei</option>
                                    <option value="Bulgaria" id="BG">Bulgaria</option>
                                    <option value="Burkina Faso" id="BF">Burkina Faso</option>
                                    <option value="Burundi" id="BI">Burundi</option>
                                    <option value="Cabo Verde" id="CV">Cabo Verde</option>
                                    <option value="Camboya" id="KH">Camboya</option>
                                    <option value="Camerún" id="CM">Camerún</option>
                                    <option value="Canadá" id="CA">Canadá</option>
                                    <option value="Chad" id="TD">Chad</option>
                                    <option value="Chile" id="CL">Chile</option>
                                    <option value="China" id="CN">China</option>
                                    <option value="Chipre" id="CY">Chipre</option>
                                    <option value="Ciudad estado del Vaticano" id="VA">Ciudad estado del Vaticano</option>
                                    <option value="Colombia" id="CO">Colombia</option>
                                    <option value="Comores" id="KM">Comores</option>
                                    <option value="Congo" id="CG">Congo</option>
                                    <option value="Corea" id="KR">Corea</option>
                                    <option value="Corea del Norte" id="KP">Corea del Norte</option>
                                    <option value="Costa del Marfíl" id="CI">Costa del Marfíl</option>
                                    <option value="Costa Rica" id="CR">Costa Rica</option>
                                    <option value="Croacia" id="HR">Croacia</option>
                                    <option value="Cuba" id="CU">Cuba</option>
                                    <option value="Dinamarca" id="DK">Dinamarca</option>
                                    <option value="Djibouri" id="DJ">Djibouri</option>
                                    <option value="Dominica" id="DM">Dominica</option>
                                    <option value="Ecuador" id="EC">Ecuador</option>
                                    <option value="Egipto" id="EG">Egipto</option>
                                    <option value="El Salvador" id="SV">El Salvador</option>
                                    <option value="Emiratos Arabes Unidos" id="AE">Emiratos Arabes Unidos</option>
                                    <option value="Eritrea" id="ER">Eritrea</option>
                                    <option value="Eslovaquia" id="SK">Eslovaquia</option>
                                    <option value="Eslovenia" id="SI">Eslovenia</option>
                                    <option value="España" id="ES">España</option>
                                    <option value="Estados Unidos" id="US">Estados Unidos</option>
                                    <option value="Estonia" id="EE">Estonia</option>
                                    <option value="c" id="ET">Etiopía</option>
                                    <option value="Ex-República Yugoslava de Macedonia" id="MK">Ex-República Yugoslava de Macedonia</option>
                                    <option value="Filipinas" id="PH">Filipinas</option>
                                    <option value="Finlandia" id="FI">Finlandia</option>
                                    <option value="Francia" id="FR">Francia</option>
                                    <option value="Gabón" id="GA">Gabón</option>
                                    <option value="Gambia" id="GM">Gambia</option>
                                    <option value="Georgia" id="GE">Georgia</option>
                                    <option value="Georgia del Sur y las islas Sandwich del Sur" id="GS">Georgia del Sur y las islas Sandwich del Sur</option>
                                    <option value="Ghana" id="GH">Ghana</option>
                                    <option value="Gibraltar" id="GI">Gibraltar</option>
                                    <option value="Granada" id="GD">Granada</option>
                                    <option value="Grecia" id="GR">Grecia</option>
                                    <option value="Groenlandia" id="GL">Groenlandia</option>
                                    <option value="Guadalupe" id="GP">Guadalupe</option>
                                    <option value="Guam" id="GU">Guam</option>
                                    <option value="Guatemala" id="GT">Guatemala</option>
                                    <option value="Guayana" id="GY">Guayana</option>
                                    <option value="Guayana francesa" id="GF">Guayana francesa</option>
                                    <option value="Guinea" id="GN">Guinea</option>
                                    <option value="Guinea Ecuatorial" id="GQ">Guinea Ecuatorial</option>
                                    <option value="Guinea-Bissau" id="GW">Guinea-Bissau</option>
                                    <option value="Haití" id="HT">Haití</option>
                                    <option value="Holanda" id="NL">Holanda</option>
                                    <option value="Honduras" id="HN">Honduras</option>
                                    <option value="Hong Kong R. A. E" id="HK">Hong Kong R. A. E</option>
                                    <option value="Hungría" id="HU">Hungría</option>
                                    <option value="India" id="IN">India</option>
                                    <option value="Indonesia" id="ID">Indonesia</option>
                                    <option value="Irak" id="IQ">Irak</option>
                                    <option value="Irán" id="IR">Irán</option>
                                    <option value="Irlanda" id="IE">Irlanda</option>
                                    <option value="Isla Bouvet" id="BV">Isla Bouvet</option>
                                    <option value="Isla Christmas" id="CX">Isla Christmas</option>
                                    <option value="Isla Heard e Islas McDonald" id="HM">Isla Heard e Islas McDonald</option>
                                    <option value="Islandia" id="IS">Islandia</option>
                                    <option value="Islas Caimán" id="KY">Islas Caimán</option>
                                    <option value="Islas Cook" id="CK">Islas Cook</option>
                                    <option value="Islas de Cocos o Keeling" id="CC">Islas de Cocos o Keeling</option>
                                    <option value="Islas Faroe" id="FO">Islas Faroe</option>
                                    <option value="Islas Fiyi" id="FJ">Islas Fiyi</option>
                                    <option value="Islas Malvinas Islas Falkland" id="FK">Islas Malvinas Islas Falkland</option>
                                    <option value="Islas Marianas del norte" id="MP">Islas Marianas del norte</option>
                                    <option value="Islas Marshall" id="MH">Islas Marshall</option>
                                    <option value="Islas menores de Estados Unidos" id="UM">Islas menores de Estados Unidos</option>
                                    <option value="Islas Palau" id="PW">Islas Palau</option>
                                    <option value="Islas Salomón" d="SB">Islas Salomón</option>
                                    <option value="Islas Tokelau" id="TK">Islas Tokelau</option>
                                    <option value="Islas Turks y Caicos" id="TC">Islas Turks y Caicos</option>
                                    <option value="Islas Vírgenes EE.UU." id="VI">Islas Vírgenes EE.UU.</option>
                                    <option value="Islas Vírgenes Reino Unido" id="VG">Islas Vírgenes Reino Unido</option>
                                    <option value="Israel" id="IL">Israel</option>
                                    <option value="Italia" id="IT">Italia</option>
                                    <option value="Jamaica" id="JM">Jamaica</option>
                                    <option value="Japón" id="JP">Japón</option>
                                    <option value="Jordania" id="JO">Jordania</option>
                                    <option value="Kazajistán" id="KZ">Kazajistán</option>
                                    <option value="Kenia" id="KE">Kenia</option>
                                    <option value="Kirguizistán" id="KG">Kirguizistán</option>
                                    <option value="Kiribati" id="KI">Kiribati</option>
                                    <option value="Kuwait" id="KW">Kuwait</option>
                                    <option value="Laos" id="LA">Laos</option>
                                    <option value="Lesoto" id="LS">Lesoto</option>
                                    <option value="Letonia" id="LV">Letonia</option>
                                    <option value="Líbano" id="LB">Líbano</option>
                                    <option value="Liberia" id="LR">Liberia</option>
                                    <option value="Libia" id="LY">Libia</option>
                                    <option value="Liechtenstein" id="LI">Liechtenstein</option>
                                    <option value="Lituania" id="LT">Lituania</option>
                                    <option value="Luxemburgo" id="LU">Luxemburgo</option>
                                    <option value="Macao R. A. E" id="MO">Macao R. A. E</option>
                                    <option value="Madagascar" id="MG">Madagascar</option>
                                    <option value="Malasia" id="MY">Malasia</option>
                                    <option value="Malawi" id="MW">Malawi</option>
                                    <option value="Maldivas" id="MV">Maldivas</option>
                                    <option value="Malí" id="ML">Malí</option>
                                    <option value="Malta" id="MT">Malta</option>
                                    <option value="Marruecos" id="MA">Marruecos</option>
                                    <option value="Martinica" id="MQ">Martinica</option>
                                    <option value="Mauricio" id="MU">Mauricio</option>
                                    <option value="Mauritania" id="MR">Mauritania</option>
                                    <option value="Mayotte" id="YT">Mayotte</option>
                                    <option value="México" id="MX">México</option>
                                    <option value="Micronesia" id="FM">Micronesia</option>
                                    <option value="Moldavia" id="MD">Moldavia</option>
                                    <option value="Mónaco" id="MC">Mónaco</option>
                                    <option value="Mongolia" id="MN">Mongolia</option>
                                    <option value="Montserrat" id="MS">Montserrat</option>
                                    <option value="Mozambique" id="MZ">Mozambique</option>
                                    <option value="Namibia" id="NA">Namibia</option>
                                    <option value="Nauru" id="NR">Nauru</option>
                                    <option value="Nepal" id="NP">Nepal</option>
                                    <option value="Nicaragua" id="NI">Nicaragua</option>
                                    <option value="Níger" id="NE">Níger</option>
                                    <option value="Nigeria" id="NG">Nigeria</option>
                                    <option value="Niue" id="NU">Niue</option>
                                    <option value="Norfolk" id="NF">Norfolk</option>
                                    <option value="Noruega" id="NO">Noruega</option>
                                    <option value="Nueva Caledonia" id="NC">Nueva Caledonia</option>
                                    <option value="Nueva Zelanda" id="NZ">Nueva Zelanda</option>
                                    <option value="Omán" id="OM">Omán</option>
                                    <option value="Panamá" id="PA">Panamá</option>
                                    <option value="Papua Nueva Guinea" id="PG">Papua Nueva Guinea</option>
                                    <option value="Paquistán" id="PK">Paquistán</option>
                                    <option value="Paraguay" id="PY">Paraguay</option>
                                    <option value="Perú" selected id="PE">Perú</option>
                                    <option value="Pitcairn" id="PN">Pitcairn</option>
                                    <option value="Polinesia francesa" id="PF">Polinesia francesa</option>
                                    <option value="Polonia" id="PL">Polonia</option>
                                    <option value="Portugal" id="PT">Portugal</option>
                                    <option value="Puerto Rico" id="PR">Puerto Rico</option>
                                    <option value="Qatar" id="QA">Qatar</option>
                                    <option value="Reino Unido" id="UK">Reino Unido</option>
                                    <option value="República Centroafricana" id="CF">República Centroafricana</option>
                                    <option value="República Checa" id="CZ">República Checa</option>
                                    <option value="República de Sudáfrica" id="ZA">República de Sudáfrica</option>
                                    <option value="República Democrática del Congo Zaire" id="CD">República Democrática del Congo Zaire</option>
                                    <option value="República Dominicana" id="DO">República Dominicana</option>
                                    <option value="Reunión" id="RE">Reunión</option>
                                    <option value="Ruanda" id="RW">Ruanda</option>
                                    <option value="Rumania" id="RO">Rumania</option>
                                    <option value="Rusia" id="RU">Rusia</option>
                                    <option value="Samoa" id="WS">Samoa</option>
                                    <option value="Samoa occidental" id="AS">Samoa occidental</option>
                                    <option value="San Kitts y Nevis" id="KN">San Kitts y Nevis</option>
                                    <option value="San Marino" id="SM">San Marino</option>
                                    <option value="San Pierre y Miquelon" id="PM">San Pierre y Miquelon</option>
                                    <option value="San Vicente e Islas Granadinas" id="VC">San Vicente e Islas Granadinas</option>
                                    <option value="Santa Helena" id="SH">Santa Helena</option>
                                    <option value="Santa Lucía" id="LC">Santa Lucía</option>
                                    <option value="Santo Tomé y Príncipe" id="ST">Santo Tomé y Príncipe</option>
                                    <option value="Senegal" id="SN">Senegal</option>
                                    <option value="Serbia y Montenegro" id="YU">Serbia y Montenegro</option>
                                    <option value="Sychelles" id="SC">Seychelles</option>
                                    <option value="Sierra Leona" id="SL">Sierra Leona</option>
                                    <option value="Singapur" id="SG">Singapur</option>
                                    <option value="Siria" id="SY">Siria</option>
                                    <option value="Somalia" id="SO">Somalia</option>
                                    <option value="Sri Lanka" id="LK">Sri Lanka</option>
                                    <option value="Suazilandia" id="SZ">Suazilandia</option>
                                    <option value="Sudán" id="SD">Sudán</option>
                                    <option value="Suecia" id="SE">Suecia</option>
                                    <option value="Suiza" id="CH">Suiza</option>
                                    <option value="Surinam" id="SR">Surinam</option>
                                    <option value="Svalbard" id="SJ">Svalbard</option>
                                    <option value="Tailandia" id="TH">Tailandia</option>
                                    <option value="Taiwán" id="TW">Taiwán</option>
                                    <option value="Tanzania" id="TZ">Tanzania</option>
                                    <option value="Tayikistán" id="TJ">Tayikistán</option>
                                    <option value="Territorios británicos del océano Indico" id="IO">Territorios británicos del océano Indico</option>
                                    <option value="Territorios franceses del sur" id="TF">Territorios franceses del sur</option>
                                    <option value="Timor Oriental" id="TP">Timor Oriental</option>
                                    <option value="Togo" id="TG">Togo</option>
                                    <option value="Tonga" id="TO">Tonga</option>
                                    <option value="Trinidad y Tobago" id="TT">Trinidad y Tobago</option>
                                    <option value="Túnez" id="TN">Túnez</option>
                                    <option value="Turkmenistán" id="TM">Turkmenistán</option>
                                    <option value="Turquía" id="TR">Turquía</option>
                                    <option value="Tuvalu" id="TV">Tuvalu</option>
                                    <option value="Ucrania" id="UA">Ucrania</option>
                                    <option value="Uganda" id="UG">Uganda</option>
                                    <option value="Uruguay" id="UY">Uruguay</option>
                                    <option value="Uzbekistán" id="UZ">Uzbekistán</option>
                                    <option value="Vanuatu" id="VU">Vanuatu</option>
                                    <option value="Venezuela" id="VE">Venezuela</option>
                                    <option value="Vietnam" id="VN">Vietnam</option>
                                    <option value="Wallis y Futuna" id="WF">Wallis y Futuna</option>
                                    <option value="Yemen" id="YE">Yemen</option>
                                    <option value="Zambia" id="ZM">Zambia</option>
                                    <option value="Zimbabue" id="ZW">Zimbabue</option>
                                  </select>
                                </div>
  
                                <div class="form-group">
                                  <label for="departamento">Departamento</label>
                                  <input type="text" class="form-control" id="departamento" name="departamento" value="{{old('departamento')}}">
                                </div>
  
                               
                                
                                <div class="form-group">
                                  <label for="distrito">Distrito</label>
                                  <input type="text" class="form-control" id="distrito" name="distrito" value="{{old('distrito')}}">
                                </div>
  
                              </div>
                              
                              <div class="col-md-6">
                                <div class="form-group">
                                  <label for="provincia">Provincia</label>
                                  <input type="text" class="form-control" id="provincia"  name="provincia" value="{{old('provincia')}}">
                                </div>
                                <div class="form-group">
                                  <label for="localidad">Localidad</label>
                                  <input type="text" class="form-control" id="localidad" name="localidad" value="{{old('localidad')}}">
                                </div>
                                <div class="form-group">
                                  <label for="fColecta">Fecha Colecta</label>
                                  <input type="text" class="form-control" id="fColecta" name="fColecta" value="{{old('fColecta')}}">
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div id="map" style="height: 400px; width:100%; border:1px solid #ccc; padding:5px; border-radius:5px"></div>
                                  mapa de localizacion
                              </div>
                              
                            </div>
                          </fieldset>
                        </div>
                      </div>
                      <div class="card-footer text-center">
                        <button class="btn btn-success">REGISTRAR ESPECIMEN</button>
                      </div>
                  </form>
              </div>
          </div>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        $('#button-delete').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: '¿Seguro que quiere eliminar?',
            text: "¡No podrás revertir esto!",
            type: 'Cuidado',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, Eliminar'
        }).then((result) => {
            if (result.value) {

                form.submit();
            }
        });
    });
    </script>
<script>
 function initMap() {
      
      const contentString =
        '<div id="content">' +
        '<div id="siteNotice">' +
        "</div>" +
        '<h5 class="firstHeading">Lugar de captura</h5>' +
        '<div id="bodyContent">' +
        "<p>Especimen capturado en este lugar</p>" +
        "</div>" +
        "</div>";
      

      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
          (position) => {
           const pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude,
            };

            let map = new google.maps.Map(document.getElementById("map"), {
              zoom: 18,
            });

            const infowindow = new google.maps.InfoWindow({
              content: contentString,
            });

            infowindow.setPosition(pos);
            //infowindow.setContent("Location found.");
            infowindow.open(map);
            map.setCenter(pos);
          },
          () => {
            handleLocationError(true, infowindow, map.getCenter());
          }
        );
      } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infowindow, map.getCenter());
      }
      

      // const infowindow = new google.maps.InfoWindow({
      //       content: contentString,
      // });
      
      const marker = new google.maps.Marker({
        position: pos,
        map: map,
        setDraggable:true
      });

      marker.addListener("click", () => {
        infowindow.open({
                anchor: marker,
                map,
                shouldFocus: false,
            });
        });
    }

    initMap()   
  </script>
  @stop
