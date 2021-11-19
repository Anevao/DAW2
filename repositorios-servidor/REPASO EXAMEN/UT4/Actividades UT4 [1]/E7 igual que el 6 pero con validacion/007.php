<?php
//Función validación
//Coincidencias Basicas
/*
.       - Cualquier Caracter, excepto nueva linea
\d      - Cualquier Digitos (0-9)
\D      - No es un Digito (0-9)
\w      - Caracter de Palabra (a-z, A-Z, 0-9, _)
\W      - No es un Caracter de Palabra.
\s      - Espacios de cualquier tipo. (espacio, tab, nueva linea)
\S      - No es un Espacio, Tab o nueva linea.

Limites
\b      - Limite de Palabra
\B      - No es un Limite de Palabra
^       - Inicio de una cadena de texto
$       - Final de una cadena de texto

Cuantificadores:
*       - 0 o Más
+       - 1 o Más
?       - 0 o Uno
{3}     - Numero Exacto
{3,4}   - Rango de Numeros (Minimo, Maximo)

Conjuntos de Caracteres
[]      - Caracteres dentro de los brackets
[^ ]    - Caracteres que NO ESTAN dentro de los brackets

Grupos
( )     - Grupo
|       - Uno u otro
*/
//si la coma no funciona en los[]probar -
function valida_dato(){
    $patron='/^[a,z]{3,}/i';
    return preg_match($patron,$_POST["respuesta"]);
}
//Recogida de datos
$Errordato="";
if (isset($_POST["respuesta"])) {
    if(!empty($_POST["enviar"])){
        if(valida_dato()==0){
            $Errordato="Error. Sólo Caracteres [a-z][A-Z]";
        }
        else{
            $respuesta = strtolower($_POST["respuesta"]);
            if ($respuesta != "blanco") {
                echo ("<h1>¡Incorrecto!</h1>");
            } else echo ("<h1>¡Correcto!</h1>");
}
    }else $Errordato = "Error: El dato está vacío";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Post con envío en el mismo formulario</title>
</head>

<body>
    <!--metodo post= enviar los datos a un php que recibe $_POST[name=]-->
    <form action="" method="post">
        <fieldset>
            <legend>PREGUNTA</legend>
            <label name="pregunta">
                ¿De qué color es el caballo blanco de Santiago?
                <input type="text" name="respuesta"/>
            </label>
        </fieldset>
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>
