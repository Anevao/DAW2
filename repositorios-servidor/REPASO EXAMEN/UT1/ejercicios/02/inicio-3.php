<?php
const MI_SITIO = 'miSitio.com';
$nombre = 'Olivier';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
  <head>
    <meta charset="utf-8" />
    <title>Inicio</title>
  </head>
  <body>
    <div>
    <?php
    // Mostrar los mensajes
    echo "Hola $nombre.<br />";
    echo 'Bienvenido a ',MI_SITIO,'.<br />';
    // Contar el n�mero de letras del nombre.
    $i = 0;
    while ($nombre[$i]) {
      $i++;
    }
    echo "Su nombre tiene $i letras.<br />";
    // Determinar si el nombre empieza por una vocal o una consonante.
    switch ($nombre[0]) {
      case 'A':
      case 'E':
      case 'I':
      case 'O':
      case 'U':
      case 'Y':
        echo 'Su nombre empieza por una vocal.<br />';
        break;
      default:
        echo 'Su nombre empieza por una consonante.<br />';
    }
    ?>
    </div>
  </body>
</html>