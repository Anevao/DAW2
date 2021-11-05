<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio alumnos2 ejemplo </title>
</head>
<body>
<h1><center> Ejercicio alumnos2 ejemplo</center></h1>
<br>
<?php
    require_once("./alumnos2.php")
    
    $primero1 = new Primero("Luis",20,5);
    echo $primero1->superaCurso();
    $segundo1 = new Segundo("Marta", 22,7,8,"no apto");
    echo $segundo1->superaCurso();


?>
<br>
</body>
</html>