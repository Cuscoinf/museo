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
    <div class="contenido">
        {!! $contenido !!}
    </div>
</body>

</html>
