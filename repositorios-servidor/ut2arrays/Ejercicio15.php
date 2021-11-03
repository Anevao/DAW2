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
$texto="Las plataformas web que tienen apache son ";
//$texto1="Las plataformas web que tienen windows son ";
$plataformasWeb = array('LAMP'=>array('Linux','Apache','MySQL','PHP'),
'WISA'=>array('Windows','IIS','SQL','ASP'),
'WAMP'=>array('Windows','Apache','MySQL','PHP'),
'WIMP'=>array('Windows','ISS','MySQL','PHP'));
foreach($plataformasWeb as $plat=>$componentes){
           if($componentes[1]=='Apache')
        {
            $texto .=  $plat . '  ';
        }
        /*SI HUBIESE QUE BUSCAR EN CAULQUIER POSICION DEL ARRAY
              
        foreach($componentes as $comp){
        if($comp=='Windows')
        {
        $texto1 .=  $plat . '  ';
        }
        }
        */

    }
//echo ($texto1);
echo ($texto);

?>
<br>
</body>
</html>  