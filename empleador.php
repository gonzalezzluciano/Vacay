<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <link rel="stylesheet" href="/Vacay/css/style2.css">
    <link rel="shortcut icon" href="./img/logo.png">

    <!-- Javascript - framework JQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <script src="./scripts/empleador.js" type="text/javascript"></script>
    <style>
        table, th, td {
        border: 1px solid black;
        margin-left: 3px;
        margin-right: 3px;
        }
    </style>
</head>

<body>
    <header>
        <a href="index.html"><img class="logo" src="./img/vacay.png" alt="Vacay"></a>
    </header>


    <div class="marcoSolicitud">
        <h4>Elegir un Sector</h4>
        <br> 
        <select name="sectores" id="sectores" style="width:200px; height:30px;">            
        </select>       
        <br>
        <div id="Grilla" class="marcoSolicitud" style="border:1px solid; margin:10px;"></div>
        <br/>
        <div><span id="mensaje"></span></div>
        </br/>
        <div class="inputSolicitud">
            <button id="btn_guardar">Guardar aprobaciones</button>
        </div>
    </div>

</body>

</html>