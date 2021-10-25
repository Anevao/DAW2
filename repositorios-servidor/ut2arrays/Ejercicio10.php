<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Ejercicio 10 </title>
</head>
<body>
<h1><center> Ejercicio 10</center></h1>
<br>
<?php
function solo18_22($al,&$resul){
    $resul="";
    $situacion=false;
    foreach($al as $ciclo=>$numal)
    {
        if($numal[1]<>0$$ $numal[0]==0&& $numal[2]==0)
        {
            $resul.=$ciclo." ";
            $situacion=true;
        }
        return $situacion
    }
}
$alumnos=array('FP'=>array(10,0,0),
                    'smr'=>array(2,40,15)
) ;
if(solo18_22($alumnos,$resul))
{
echo("los cilcos solo tienes es ".$resul."<br>")
}else
echo ('no hay')

?>
<br>
</body>
</html>