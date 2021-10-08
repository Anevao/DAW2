<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 13 </title>
</head>
<body>
<h1><center> Ejercicio 13</center></h1>
<br>
<?php

$num=333;
if($num>=100 && $num<=999){
    $coeficiente=(int)($num/100);
    $resto=$num%10;
    if($coeficiente==$resto)
        echo "$num es un numero capicua";
    else
        echo "$num no es un numero capicua";
}else
echo "este ejercicio funciona para nuemros de 3 cifras y $num no lo es"

?>
<br>
</body>
</html>