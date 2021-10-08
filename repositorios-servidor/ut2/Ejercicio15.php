<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 15 </title>
</head>
<body>
<h1><center> Ejercicio 15</center></h1>
<br>
<?php

$año=2020;
$mes=10;
$dia=6
$suma=$año+$mes+$dia;
while ($suma>10){
$sumanueva=0
    while((int)($suma/10)!=0){
        $sumanueva+=($suma%10);
        $suma=(int)($suma/10);
    }
    $sumanueva+=($suma%10);
    $suma=$nuevasuma;
}
echo "El numero del tarot es $suma"
   

?>
<br>
</body>
</html>