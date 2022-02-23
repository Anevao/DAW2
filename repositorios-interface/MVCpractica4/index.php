<?php
	if (isset($_POST['enviar']))
		{
		if ($_POST['usuario']=='admin')
			{
        header ("location: ./vista/admin.html");
			}
		else if ($_POST['usuario']=='profesor') {
      header ("location: ./vista/profesor.html");
    }else
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
        src: url("./source/News.otf"); 
      }
      /*html{
        height: 100%;
      }*/
       :focus {
        outline: 2px solid blue;
      }
      body {
        display: grid;
        grid-template:
          "header" 15%
          "main" auto
          "nav"   10%
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
      @media (min-width: 600px) {
        body {
          /*height: 100%;*/
          grid-template:
            "header header " 150px
            "main main  " 1fr
            " footer nav " 100px /
            50% 50%;
        }
        img {
        height: 80px;
      }
      
      }
      @media (min-width: 1000px) {
        body {
         /* background-image: url("./source/centro2.jpg") no-repeat center fixed;
        object-fit: cover;
        opacity: 0,5;*/
          /*height: 100%;*/
          grid-template:
            "header header " 150px
            "main main  " 1fr
            " footer nav " 100px /
            80% 20%;
        }
        img {
        height: 80px;
      }
      
      }
      img {
        height: 40px;
        object-fit: contain;
      }
      /* Header nav y footer */
      header {
        height: 150px;
        font-family: "news",sans-serif, fantasy;
        background-color: #80cfff;
      }
      h1{
        font-size: larger;
      }
      nav,footer {
        height: 100px;
        font-family: "news",sans-serif, fantasy;
        background-color: #80cfff;
      }
      /* Main */
      main {
        font-family: "news", sans-serif, fantasy;
        border: 5px ridge lightgray;
        
      }
      /* Footer */
      footer p {
        text-align: center;
        margin-top: 50px;
      }
      form{
        align-items: center;
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
        <li><a href="http://cifpjuandecolonia.centros.educa.jcyl.es/sitio/index.cgi?wid_form=1">Contacto</a></li>
        <li><a href="#">RRSS</a></li>
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
        <legend>Formulario de conexion con la plataforma</legend>
        <!--tenemos un formulario con el action hacia "" osease se queda aqui -->
        Usuario: <input type="text" name="usuario" placeholder="profesor" required/> Contraseña:
        <input type="password" name="clave" required />
        <!--el submit coge los input y los envia por ahora el valor name solo acepta admin profesor y el resto los considera alumnos -->
        <input type="submit" name="enviar" value="LOGIN" />
      </form>
    </main>
    <footer>
      <p>&copy; Juan de Colonia 2021</p>
    </footer>
  </body>
</html>
