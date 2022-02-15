<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
</head>

<body>
    <?php
    //Para get.php get lo envia sin encriptar en la url y tiene caracteres limitados
    /*$respuesta = strtolower($_GET["respuesta"]);
    if ($respuesta != "blanco") {
        echo ("<h1>¡Incorrecto!</h1>");
    } else echo ("<h1>¡Correcto!</h1>");*/

    //Para post.php post lo envia encriptado
    //strtolower es igual a .toLowerCase()
    //$_post[namedelimput'"validos]
    $respuesta = strtolower($_POST["respuesta"]);
    if ($respuesta != "blanco") {
        echo ("<h1>¡Incorrecto!</h1>");
    } else echo ("<h1>¡Correcto!</h1>");
    ?>
</body>

</html>