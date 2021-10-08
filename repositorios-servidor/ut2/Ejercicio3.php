<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 3 </title>
</head>
<body>
<h1><center> Ejercicio 3</center></h1>
<br>
<?php

$j=0;
$a=4;
for($i=0;$i<$a;$i++){
    for($ast=-1;$ast<$i;$ast++){
        $j++;
        echo "$j ";}
    echo '<br>';
}

?>
<br>
</body>
</html>