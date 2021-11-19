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
//negativos
$num= array(-1,2,5,-7,4);
for($i=0;$i<5;$i++){//5=count($num)
    if(num[$i]<0)
        echo $num;
foreach($num as $valor)
    if($valor<0)
        echo $valor;
}
//media
$suma=0;

for($i=0;$i<count($num);$i++){
    $suma= $suma +num[$i];
}

        echo $media;
//mira las posiciones ne las k la posicion al cuadrado sea el valor del componente.
$situac=false
for($i=0;$i<count($num);$i++){
    if(num[$i]==($i^2)){
        echo 'Posicion $i contiene $num[$i]';
        $situac=true;
    }
}
if($situac)
    echo "no existe ningun componente"
//array invertido
for($i=5;$i<0;$i--){//5=count($num)
    if(num[$i]<0)
        echo $num;
}
//generar array*2

for($i=0;$i<count($num);$i++){//5=count($num)
    num2[$i]=num[$i]*2;
}
//examen control de errores, formularios, funciones, 
//añadir 2 numeros y calcular media again
$num[]=9;
$num[]=15;
$suma=0;

for($i=0;$i<count($num);$i++){
    $suma= $suma +num[$i];
}
$media= $suma/count($num);
echo $media;

?>
<br>
</body>
</html>