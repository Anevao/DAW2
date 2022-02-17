<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--manda lo elegido a controlador actor-->
    <form action="../controlador/control_actor.php" method="post">
        <label for="naci">Elige una Nacionalidad:</label>
        <select name="nacionalidad" id="naci">
            <?php
            //le llega este dato k es una array de nacionalidades
            foreach ($datos as $clave => $valor)
                echo '<option value=' . $valor . '>' . $valor . '</option>';
            ?>

        </select>
        <input type="submit" value="Enviar" name="enviar" />
    </form>

</body>

</html>