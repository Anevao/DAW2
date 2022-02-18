<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--manda el submit a controlador/general submit manda el option.value-->
    <form action="./controlador/general.php" method="post">
        <table align="center" border="1">
            <tr>
                <td>
                    Elegir una consulta:<br><br>
                    <select name="consulta">
                        <?php
                        //esta funcion esta en funciones.php
                        $consulta = menuconsultas();
                        foreach ($consulta as $clave => $valor)
                        //clave y valor
                        //'1' => 'Peliculas dramaticas',
                        //'2' => 'Nombre actrices',
                        //'3' => 'Actores de una Nacionalidad',
                        //'4' => 'Peliculas en las que interviene un actor'
                            echo '<option value=' . $clave . '>' . $valor . '</option>';
                        ?>
                    </select>
                    <br>
                </td>
                <td align="center">
                    <input type="submit" name="Continuar" value="continuar">

                </td>
            </tr>
        </table>
    </form>
</body>

</html>