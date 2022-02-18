<?php
include ("./usuario.php");
if (isset($_COOKIE['login']))
	{
	$datos=explode("-", $_COOKIE['login']);
	if (isset($_POST['enviar']))
		{
	if(acceso($_POST['usuario']))
			{
			if($_POST['usuario']==$datos[0])
			{
				$datos[1]++;
				$veces=$datos[1];
				$usu=$_POST['usuario'];
				require_once("bienvenida.php");
			}else{
				$datos[3]++;
				$veces=$datos[3];
				$usu=$_POST['usuario'];
				require_once("bienvenida.php");
			}
			$valorcookie=implode("-",$datos);
			setcookie('login',$valorcookie,time()+600);
			}
		else
			echo "Acceso denegado. Las credenciales no son correctas";
	exit;
		}
	}
else	
	if (isset($_POST['enviar']))
		{
		if(acceso($_POST['usuario']))
			{
			$datos=["LUIS",0,"MARIA",0];
			if($_POST['usuario']==$datos[0])
			{
				$datos[1]++;
				$veces=$datos[1];
				$usu=$_POST['usuario'];
				require_once("bienvenida.php");
			}else{
				$datos[3]++;
				$veces=$datos[3];
				$usu=$_POST['usuario'];
				require_once("bienvenida.php");
			}
			$valorcookie=implode("-",$datos);
			setcookie('login',$valorcookie,time()+600);
			}
		else
			echo "Acceso denegado. Las credenciales no son correctas";
		exit;
		}

	function acceso($usu){
		$nomfich = ".\usu.txt";
    	$fich = fopen($nomfich, "r");
    	if($fich == false){
        	echo "Archivo no encontrado";
			return false;
    	}else{
			 $arrayUsuarios = explode(",",fgets($fich));
			 if($arrayUsuarios[0]==$usu||$arrayUsuarios[1]==$usu){
				fclose($fich);
				return true;
			 }else{
				fclose($fich);
				return false;
			 }
        
    }
	}
?>	
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> EJERCICIO1 </title>
</Head>
<body>
<br>
<!--FORMULARIO -->
<p align="center">
<h1> ACCESO RESULTADO PRUEBAS </h1>
<form action="" method="post">
	Usuario: <input type="text" name="usuario">
	<input type="submit" name="enviar" value="LOGIN">
</form>
</p>
	
</body>
</html>