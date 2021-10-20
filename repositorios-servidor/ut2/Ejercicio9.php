<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 9 </title>
</head>
<body>
<h1><center> Ejercicio 9</center></h1>
<br>
<?php

$num1=3;
$num2=5;
$num3=7;
$nummax=$num1;
$maximos=1;
if($nummax<=$num2)
    if($nummax==$num2)
        $maximos+=1;    //suma uno, preferible usar $maximos++
    else{
        $nummax=$num2;
        $maximos=1; 
        }
if($nummax==$num3)
            $maximos+=1;    //
        else{
            $nummax=$num3;
            $maximo1=1; 
            }

        echo "El maximo es $nummax y aparece $maximos vecves";
    

?>
<br>
</body>
</html>