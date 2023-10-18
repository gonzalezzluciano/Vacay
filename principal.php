<?php

//include "./general/BaseDatos/conexion.php";

?>

<html>
<head>

<link rel="shortcut icon" href="./img/logo.png">

<!-- CSS - Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
<link rel="stylesheet" href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" type="text/css" />
<link rel="stylesheet" href="./css/stylePrin.css">

<!-- Javascript - framework JQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
<script src="./scripts/principal.js" type="text/javascript"></script>

<style>
    .borde-tabla {
        border: 1px solid black;
        margin-left: 3px;
        margin-right: 3px;
    }
    .tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
  }
   
</style>

</head>
<body>
    <header>
        <a href="index.html"><img class="logo" src="img/vacay.png" alt="Vacay"></a>
    </header>

    <div id="formulario" class="container">

            <div id="cabecera" class="row">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <div id="titulo"><span class="h1"></span></div>
                </div>          
            </div>
            <div class="row">
                <div class="column"><div id="seccion" class="row pt-2">
                
                <div class="col-12">
                    <div id="seccion"><span class="h3">Solicitud de Vacaciones</span></div>
                </div>
                            
            </div>
            <div id="datos" class="row pt-3">

                <div class="col-12">
                    <span>Bienvenido/a&nbsp;</span>
                    <span id="etiqueta_nombre" class="font-weight-bold"></span>
                    <br/>
                    <span id="etiqueta_persona_id" class="font-weight-bold"></span>
                </div>

            </div>
            
            <!-- Fechas  -->
            <div class="row pt-2">
                <div class="col-2"><span>Fecha Desde:</span></div>
                <div class="col-4">
                    <input id="fecha_desde" width="270" />
                    <script>
                        $('#fecha_desde').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'dd/mm/yyyy',
                            minDate: new Date()
                        });
                    </script>
                </div>
            
            </div>
            <div class="row pt-2">
                <div class="col-2"><span>Fecha Hasta:</span></div>
                <div class="col-9">
                    <input id="fecha_hasta" width="270" />
                    <script>
                        $('#fecha_hasta').datepicker({
                            uiLibrary: 'bootstrap4',
                            format: 'dd/mm/yyyy',
                            minDate: new Date()
                        });
                    </script>
                </div>
                <div class="col-1 text-center border border-secondary rounded caja">
                        <label for="dias_diferencia" style="font-size:9px;">Cant. d&iacute;as</label>
                        <span id="dias_diferencia"></span>
                    </div>
                    <div class="col-1 text-center border border-primary rounded caja">
                        <label for="dias_restantes" style="font-size:9px;">Disponible</label><br/>
                        <span id="dias_restantes"></span>
                    </div>
            </div>
            
                        
            <!-- Mensaje al usuario -->
            <div id="sector_mensajes" class="row">
                <div class="col-12">
                    <span id="mensaje"></span>
                </div>
            </div>
            <br/>
            <div id="Grilla"></div>
            <!-- Datos de solicitudes realizadas -->
            <div id="tabla"></div>
            <br/>
            <br/>

            <div>
            <button id="boton_volver" class="btn" onclick="logout();">Salir del sistema</button>
            <button id="boton_solicitar" class="btn btn-primary" >Solicitar fechas</button>
            </div></div>
                <div class="column"><div class="calendario">
            <iframe class="calendar" src="https://calendar.google.com/calendar/embed?height=500&wkst=1&bgcolor=%23ffffff&ctz=America%2FArgentina%2FBuenos_Aires&showTitle=0&showPrint=0&showCalendars=0&showTz=0&showDate=0&showNav=1&src=ZXMuYXIjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%230B8043" 
            style="border-width:0" width="550" height="500" frameborder="0" scrolling="no">
            </iframe>
        </div></div>
            </div>
            
            
            </div>
        

            
    </div>

</body>
</html>