<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 2 </title>
</head>
<body>
<h1><center> Ejercicio 2</center></h1>
<br>
<?php
//array asociativo
$lectivos=array("otoño"=>60,
"invierno"=>61,
"primavera"=>57,
"verano"=>7);

$menosdias=300;
foreach($lectivos as $clave=>$valor)
    if($valor<$menosdias){
        $menosdias=$valor;
        $estmenoslectivos=$clave;
    }

echo "La estacion menos lectiva es $estmenoslectivos y tiene $menosdias lectivos"
?>
<br>
</body>
</html>