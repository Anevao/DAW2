<?php
//si pulsamos el boton de name enviar esto pasa a existir y empieza la ejecucion post
if (isset($_POST['enviar'])) {
    //si no existe la cookie login padentro
    if (!isset($_COOKIE['login'])) {
        //guarda en usuario el usu y la pass separado por guion y con una coma
        $usuario = $_POST['usuario'];
        //en usuarioactual solo guarda el usuario y un guion con un 0
        $usuarioactual = $_POST['usuario'];
        $usuario .= "-" . $_POST['clave'] . ",";
        //crea cookie de login con el user y la pass
        setcookie('login', $usuario, time() + 60);
        $usuarioactual .= "-" . "0";
        //crea la otro cookie aun nose para q
        setcookie("usuarioactual", $usuarioactual, time() + 60);
        //echo "Bienvenido " . $usuarioactual[0];//falta el explode
        //lo que ha 
        header("location: principal.php");
    } else {
    //si existe la cookie login------------------------------------------------------------------
        //empty si tiene valor devuelve false(como esta negado devuelve true)
        //seria lo contrario q isset
        if ((!empty($_POST['usuario'])) && (!empty($_POST['clave']))) {
            //si los dos campos tienen algo padentro


            $prueba = false;
            $repetido = false;
            $usuactual = "";
            //carga lo que hay en la cookie login en usuario
            $usuario = $_COOKIE["login"];
            //separa las cadenas de usuarioycontraseña q haya en la cookie login 
            //nos queda un array asi ["nevao-123","fer-345","rober-543"]
            $usuarioYContraseña = explode(",", $usuario);
            //cada elemento del array lo trata como un item 
            foreach ($usuarioYContraseña as $uyc) {
                //pilla el string "nevao-123" y lo hace["nevao","123"]
                //EN CADA CHISME DEL ARRAY lo mete en la variable uycspeara
                $uycseparados = explode("-", $uyc);
                //no entiendo este for
                for ($i = 0; $i < count($uycseparados); $i++) {
                    if ($_POST['usuario'] == $uycseparados[$i] && $_POST['clave'] != $uycseparados[$i + 1]) {
                        //si entra aqui, usu pero pass no
                        $repetido = true;
                    }
                    if ($_POST['usuario'] == $uycseparados[$i] && $_POST['clave'] == $uycseparados[$i + 1]) {
                       //autoriza el paso y cambia el usuario actual al usuario
                        $prueba = true;
                        $usuactual = $uycseparados[$i];
                    }
                }
            }
            if ($repetido == false) {
                if ($prueba == true) {
                    //si llega aki usu y pass correcta
                    if (isset($_COOKIE['usuarioactual'])) {
                        //array de lo q haya en usuario actual
                        $nombre = explode("-", $_COOKIE['usuarioactual']);
                        if ($usuactual == $nombre[0]) {

                            header("location: principal.php");
                        } else {
                            $usuactual .= "-" . "0";
                            setcookie("usuarioactual", $usuactual, time() + 60);

                            setcookie('login', $usuario, time() + 60);

                            //echo "Bienvenido de nuevo " . $usuactual[0];//falta el explode
                            header("location: principal.php");
                        }
                    } else {
                        $usuactual .= "-" . "0";
                        setcookie("usuarioactual", $usuactual, time() + 60);

                        setcookie('login', $usuario, time() + 60);

                        //echo "Bienvenido de nuevo " . $usuactual[0];//falta el explode
                        header("location: principal.php");
                    }
                } else {
                    //lo que has metido es nuevo entonces te registra de una 
                    //
                    $usuario .= $_POST['usuario'];
                    $newusu = $_POST['usuario'] . "-" . "0";
                    $usuario .= "-" . $_POST['clave'] . ",";
                    //en cookie login mete fer-234,
                    setcookie('login', $usuario, time() + 60);
                    //en cookie usuactual mete esto fer-0
                    setcookie("usuarioactual", $newusu, time() + 60);
                    // echo "$newusu[0] Te  has registrado con exito";//falta el explode
                    header("location: principal.php");
                }
            } else {
                //el usu si te lo ha pillao
                echo "la contraseña no es correcta";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> Login </title>
    <style>
        body {
            margin-left: auto;
            margin-right: auto;
            text-align: center;


            background-color: lightgoldenrodyellow;


        }

        h1 {
            border-bottom: dashed 2px darkgoldenrod;
            padding: 10px;
        }

        form {
            font-size: 1.5em;
        }

        #login {
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }
    </style>
</Head>

<body>
    <main>
        <br>
        <!--FORMULARIO -->
        <p align="center">
        <h1> Inicio de sesión </h1>
        <form action="" method="post">
            Usuario: <input type="text" name="usuario" placeholder="Introduzca su Usuario" required> <br>
            Contraseña: <input type="password" name="clave" placeholder="Introduzca su Contraseña" required>

            <input id="login" type="submit" name="enviar" value="LOGIN">
        </form>
        </p>
    </main>
</body>

</html>