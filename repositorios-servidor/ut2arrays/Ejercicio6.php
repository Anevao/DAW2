<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 1 </title>
</head>
<body>
<h1><center> Ejercicio 6</center></h1>
<br>
<?php
$peliculas=array('Antonio Banderas'=>array('La piel que habito','Dolor y gloria'),
'Brad Pitt'=>'Erase una vez en...Hollywood',
'Laura Dern'=>'Historia de un matrimonio');
foreach($peliculas as $actor=>$peli){
    //mostrar pelis no funciona si hay variables k no son array
    
    for ($peli as $p){
    echo " $p ";}
}
?>
<br>
</body>
</html>