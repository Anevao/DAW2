<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 1 </title>
</head>
<body>
<h1><center> Ejercicio 1</center></h1>
<br>
<?php

$a=3;
$b=5;
$c=7;
if($a>$b)
    if($a>$c)
        echo $a, "es mayor";    
    else
        echo $c, "es mayor"; 
    elseif($b>$c)
        echo $b, "es mayor"; 
    else
        echo $c, "es mayor"; 
    
?>
<br>
</body>
</html>
