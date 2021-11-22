<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1 Alberto Nevado</title>
    <style type="text/css">
        fieldset{
            width: 500px;
            margin: auto;
            text-align: center;
        }
        h1{
            color:blue
        }
        body{
            color:green; 
        }
        </style>
</head>
<body>
<fieldset>
        <h1>Familias gallegas</h1>
<?php
    //llamamos a los ficheros donde se almacenan los datos y las funciones
    include_once('datos_alberton1.inc');
    include('f_alberton1.php');
    //las funciones estan programadas de tal manera que devuelvan un string que imprimimos con echo
    echo ahorradores($galicia);
    echo porcentaje($galicia);
    ?>
    
        
    </fieldset>
</body>
</html>
