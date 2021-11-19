<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<fieldset>
        <h1>Familias gallegas</h1>
<?php
    include_once('datos_alberton1.inc');
    include('f_alberton1.php');
    echo ahorradores($galicia);
    echo porcentaje($galicia);
    ?>
    
        
    </fieldset>
</body>
</html>
