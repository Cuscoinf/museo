<!DOCTYPE html>
<html>

<head>
    <title>Carta de Presentación</title>
    <style>

        .encabezado{
            text-align: center;
        }
        .titulo{
            margin-bottom: 0px;
        }
        .subtitulo {
            margin-top: 0px;
        }
        .direccion,.correo{
            margin-top: 0px;
            margin-bottom: 0px;
        }

        h3,
        h4 {
            margin-bottom: 1px;
            margin-top: 1px;
        }

        .presente {
            margin-top: 5px;
            font-style: normal;

        }

        .contenido {
            text-align: center;
            text-align: justify;
        }

        span {
            margin-left: 20px;
        }

        table {
            margin: 0 auto;
        }

        .nombres {

            padding-right: 20px;
        }

        .dni {
            padding-left: 20px;
        }
        .despedida{
            margin-top: 40px;
            text-align: center;
        }

    </style>
</head>

<body>
    <div class="encabezado">
        <h1 class="titulo">MUSEO DE HISTORIA NATURAL</h1>
        <h2 class="subtitulo">Universidad Nacional de San Antonio Abad del Cusco</h2>
        <p class="direccion">Local Central: Paraninfo Universitario, Plaza de Armas s/n, Cusco, Perú</p>
        <p class="correo">Correo electrónico: naturalmusaac@hotmail.com</p>
    </div>


    <hr>

    <div>
        <h3>Señor:</h3>
        <h4>Mirbel Epiquien RIvera</h4>
        <h4>Director General de Gestión Sostenible del Patrimonio Forestal y de Fauna Silvestre</h4>
        <h4 class="presente">Presente</h4>
        <br>

    </div>
    <p class="contenido">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Mediante
        la presente certifico que la MSc. <strong> {{$investigador}}</strong>
        identificada con DNI 42175705, es Investigadora Asociada del Museo de Historia Natural de
        la Universidad Nacional de San Antonio Abad del Cusco. La Srta. Delgado participará como
    investigador principal del proyecto <strong> “{{$proyecto}}” </strong>respaldado por el Museo de Historia Natural de la
        Universidad Nacional de San Antonio Abad - MHNC (Cusco, Perú) en la que además participan los investigadores
        asociados al MHNC, que se identifican a continuación:</p>

    <div>
        <table>
            <tr>
                <td class="nombres">Rosalbina Butrón Loayza</td>
                <td class="dni">DNI 24003144</td>
            </tr>
            <tr>
                <td class="nombres">José Alejandro Portillo Guizado</td>
                <td class="dni">DNI 47706563</td>
            </tr>
            <tr>
                <td class="nombres">Werner Albert Pinedo Malpartida</td>
                <td class="dni">DNI 72420659</td>
            </tr>
        </table>
    </div>
    <p class="contenido">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Estoy
        convencida de que este proyecto de investigación contribuirá al conocimiento la fauna de vertebrados de la
        región y brindará información relevante para su conservación. Por lo que suscribo este documento a petición de
        los interesados para los tramites de permiso de investigación y colecta necesarios para la ejecución del
        proyecto.
    </p>

    <p>Sin otro particular me despido renovando ante Ud. mi aprecio y estima personal.
    </p>

    <p class="despedida">Atentamente.</p>
</body>

</html>
