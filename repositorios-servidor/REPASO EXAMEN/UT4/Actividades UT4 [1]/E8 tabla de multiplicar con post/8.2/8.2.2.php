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
    $patron='/\d+/';
    return preg_match($patron,$_POST["valor"]);
}

//isset es si existe
if (isset($_POST["valor"])) {
    if(!empty($_POST["valor"])){
    if(valida_dato()==0){
        echo"Error.solo numeros ";
    }
    else{
    echo "Tabla de multiplicar del ",$_POST["valor"],"</br>";
    $respuesta= $_POST["valor"];
    for($i=0; $i<=10; $i++){
        echo "$respuesta * $i = ",$respuesta*$i,"</br>";
    }}
}else{
    echo "Error: El dato está vacío,";
}
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>

<body>
    <form action="" method="post">
        <label>
            Introduzca un número: <input type="text" name="valor"/>
        </label>
        <input type="submit" value="Enviar"/>
    </form>
</br>
<p>
    
</p>
</body>
</html> 