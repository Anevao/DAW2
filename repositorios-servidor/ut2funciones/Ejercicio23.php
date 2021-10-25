<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 23 </title>
</head>
<body>
<h1><center> Ejercicio 23</center></h1>
<br>
<?php
//a) funcion covencional de usuario
function $funcion_aleatoria()
{
    $n=rand(1,6);
if($n==6)
echo "¡Enhorabuena! el valor obtenido es $n <br>"
else
echo "El valor obtenido es $n. Intentalo de nuevo ejecutando otra vez el script <br>"
};
$funcion_aleatoria();

//parte b variables de funcion
function funcion_aleatoria_variable()
{
    $n=rand(1,6);
    if($n==6)
    echo "¡Enhorabuena! el valor obtenido es $n con una funcion variable <br>"
    else
    echo "El valor obtenido es $n. Intentalo de nuevo ejecutando otra vez el script con una funcion variable <br>"
}
function f()
{

    echo "la misma variable puede hacer 2 funciones acuerdate hay k cambiarla de nombre <br>"
 
}
$juego='funcion_aleatoria_variable';
$juego();
$juego='f';
$juego();

// parte c funcion anonima y callback
//variable se asigna toda una funciona 
$funcion_aleatoria_anon=function(){
    $n=rand(1,6);
    if($n==6)
    echo "¡Enhorabuena! el valor obtenido es $n"
    else
    echo "El valor obtenido es $n. Intentalo de nuevo ejecutando otra vez el script"
    };
//se crea una funcion que le envia el constructor
function jugar($funcion_aleatoria_anon)
{
    $funcion_aleatoria_anon();
}
jugar($funcion_aleatoria_anon);

?>
<br>
</body>
</html>