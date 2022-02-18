<?php
//esta hoja tiene en su interior la declaracion de usuario su constructor y su get
include ("./usuario.php");
//lo primero que hace al entrar es ver si hay una cookie isset igual a "existe?"
if (isset($_COOKIE['login']))
	{
	//la cookie esta serializada, al deserializarla se convierte en un objeto usuario y se puede tratar como tal
	//$usu=$_COOKIE['login'];
	$usu=unserialize($_COOKIE['login']);	
	//por eso aqui llama a nom y el script se entera
	echo "Usuario Correcto ".$usu->nom." Ya se logeo exitóxamente en otro momento"."<br>";
	//acaba el pograma
	exit;
	}
else	
	//si no hay cookie la siguente opcion sera ver que pasa con el post
	//pregunta, hay post?
	if (isset($_POST['enviar']))
		{
			//si hay post compara usuario con admin y clave con mjuan q son las combinaciones buenas
		if ($_POST['usuario']=='admin' && $_POST['clave']=='mjuan')
			{
			echo "Bienvenido";
			//convierte los 2 valores del post en un objeto usuario manejable y bonito
			$usu=new Usuario ($_POST['usuario'],$_POST['clave']);
			//como las cookies solo aceptan strings usamos el metodo serialize
			//convierte objetos y cosas en strings(como json)
			$usu=serialize($usu);
			//creamos la cookie
			//guardamos primero su nombre'login
			//luego su contenido 'usu' tiene q ser una cadena de texto
			//por ultimo su tiempo de vida time() es el ahora+60segs
			setcookie('login',$usu,time()+60);
			}
		else
			echo "Acceso denegado. Las credenciales no son correctas";
		exit;
		}
?>	
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> SERIALIZACIÓN DE OBJETOS </title>
</Head>
<body>
<h3> Ejercicio 10 UT 5. Administración de sesiones  </h3>
<br>
<!--FORMULARIO -->
<p align="center">
<h2> credenciales del usuario </h2>
<form action="" method="post">
	<!--tenemos un formulario con el action hacia "" osease se queda aqui -->
	Usuario: <input type="text" name="usuario">
	Contraseña:	<input type="password" name="clave">
	<!--el submit coge los input y los envia coge el name como valor de refe y el value como su valor -->
	<input type="submit" name="enviar" value="LOGIN">
</form>
</p>
	
</body>
</html>
