<?php
//chequea si hay cookie de actividades
if(isset($_COOKIE['actividades']))
	{
	//separa los datos de la cookie en un array de strings que se parte cada -
	$datos=explode("-",$_COOKIE['actividades']);
	//si el valor de la primera posicion es nr y el de la segunda es r te manda al segundo
	if ($datos[0]=="norealizado" && $datos[1]=="realizado")
		header ("location: formulario_test.php");
	//si tienes
	if ($datos[0]=="realizado" && $datos[1]=="norealizado") 
		header ("location: formulario_examen.php");
	//si has hecho los 2 te manda a las congratulaciones
	if ($datos[0]=="realizado" && $datos[1]=="realizado") 
		header ("location: ok.html");
	
	//prueba
	if ($datos[0]=="norealizado" && $datos[1]=="norealizado") 
		header("location: matacookieactividades.php");	
	//header ("location: formulario.php");}
	}
else
//si no hay cookie te manda donde comienza el ejercicio
	header ("location: formulario.php");
?>	