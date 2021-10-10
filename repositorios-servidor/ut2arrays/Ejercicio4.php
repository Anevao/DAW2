<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 4 </title>
</head>
<body>
<h1><center> Ejercicio 4</center></h1>
<br>
<?php
//array idndexado
$matriz=array(array(1,0),array(1,1));
$identidad=true;

for($x=0;$x<count($matriz);$x++){
    for($y=0;$y<count($matriz[$x]);$y++){
        if($x==$y){
            if($matriz[$x][$y]!=1){
                $identidad=false;
                break;
            }
        }else{
            if($matriz[$x][$y]!=0){
                $identidad=false;
                break;
            }
        }
    }
}
if($identidad)
echo "Matriz identidad";
else
echo "No es una matriz identidad";

?>
<br>
</body>
</html>