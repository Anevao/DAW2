<?php
	if (isset($_POST['enviar']))
		{
		if ($_POST['usuario']=='admin')
			{
        header ("location: ./vista/admin.html");
			}
		else
      header ("location: ./vista/alumno.html");
		exit;
		}
?>	
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PRACTICA4</title>
    <style>
      @font-face {
        font-family: "news";
        font-style: normal;
        font-weight: 1200;
        src: url("../source/News.otf"); 
      }
      :hover, :focus {
        border: 2px solid blue;
      }
      body {
        display: grid;
        grid-template:
          "header" 20%
          "main" auto
          "footer" 10%;
        align-items: center;
      }
      header {
        grid-area: header;
      }

      nav {
        grid-area: nav;
      }

      main {
        grid-area: main;
      }

      footer {
        grid-area: footer;
      }
      @media screen {
        body {
          /*height: 100%;*/
          grid-template:
            "header " 300px
            " main  " 100%
            " footer " 150px /
            100%;
        }
      }
      * {
        margin: 0;
        padding: 0;
      }
      img {
        height: 80px;
        object-fit: contain;
      }
      
      /* Header y footer */
      header,
      footer {
        font-family: "news",sans-serif, fantasy;
        background-color: #80cfff;
      }
      /* Main */
      main {
        font-family: "news", sans-serif, fantasy;
        border: 5px ridge lightgray;
        /*background-image: url("./source/centro2.jpg");
        object-fit: cover;
        opacity: 0,5;*/
      }
      /* Footer */
      footer p {
        text-align: center;
        margin-top: 50px;
      }
      form{
        border: 3px solid grey;
        display: flex;
      flex-direction: column;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>
        <img
          id="juanDeColonia"
          src="./source/jc.png"
          alt="Logo del centro juan de colonia"
        />CIFP Juan de Colonia
      </h1>
    </header>
    <nav>
      <ul>
        <li><a href="#">La academia</a></li>
        <li><a href="#">Bailes</a></li>
        <li><a href="#">Horarios</a></li>
        <li><a href="#">Nosotros</a></li>
      </ul>
    </nav>
    <main>
      <h2>Noticias</h2>
      <ul>
        <li>
          Abrimos el plazo de matriculacion para el 2022-2023
          <a
            href="http://cifpjuandecolonia.centros.educa.jcyl.es/sitio/index.cgi?wid_seccion=20"
            >mas info en este enlace</a
          >
        </li>
        <li>
          ¡ENHORABUENA A LA CLASE DE DAW 2!Hemos sido <span>ganadores del premio a la
          originalidad</span> en diseño 2022 otrogado por la FAE
          <a href="https://www.youtube.com/watch?v=xvFZjo5PgG0">Accede</a>
        </li>
      </ul>
      <h2>Acceso al aula virtual.</h2>
      <form action="" method="post" border="2">
        <legend>formulario de conexion con la plataforma</legend>
        <!--tenemos un formulario con el action hacia "" osease se queda aqui -->
        Usuario: <input type="text" name="usuario" placeholder="introduzca usuario(user o admin)" required/> Contraseña:
        <input type="password" name="clave" required />
        <!--el submit coge los input y los envia coge el name como valor de refe y el value como su valor -->
        <input type="submit" name="enviar" value="LOGIN" />
      </form>
    </main>
    <footer>
      <p>&copy; Juan de Colonia 2021</p>
    </footer>
  </body>
</html>
