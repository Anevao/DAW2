<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 12 </title>
</head>
<body>
<h1><center> Ejercicio 12</center></h1>
<br>
<?php
$letradni=array('T','R','W','A','G','M','Y','F','P','D','X','B','N','J','Z',);
$dni="13113287";
$num= (int)$dni;
$op1=(int)($num/23);
$op2=op1*23;
$op3=$num-op2;
$dni.=$letradni[op3];
echo $dni;

?>
<br>
</body>
</html>  