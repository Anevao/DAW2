<?php
//este fichero tiene una clase creada k se llama conexion se usa 
//3 lineas mass abajo mandandole un nombre de base de datos 
require_once("../modelo/bd_class.php");
//crea objeto conexion
$conec = new Conexion('cinema');
//creo k es la variable del objeto conexion k tiene la info sobre la conexion----------------------------
//se almacena en la variable c
$c = $conec->bd_conect;
//el post consulta q viene de elegir trae un numero k decide aki lo k hacer
switch ($_POST['consulta']) {
    //'1' => 'Peliculas dramaticas',
    case '1':
        require_once("../modelo/model_class_peliculas.php");
        $pelicula = new Pelicula();
        //llama a la funcion de model_class_peliculas
        $result = $pelicula->query_peliculas_drama($c);
        $datos = explode(";", $result);
        require_once("../vista/peliculas_drama.php");
        break;
    case '2':
        require_once("../modelo/model_class_actores.php");
        $actor = new Actor();
        $result = $actor->query_nombre_actrices($c);
        $datos = explode(";", $result);
        require_once("../vista/nombres_actrices.php");
        break;
    case '3':
        require_once("../modelo/model_class_actores.php");
        $actor = new Actor();
        $result = $actor->query_nacionalidades($c);
        $datos = explode(";", $result);
        require_once("../vista/elegir_nacionalidad.php");
        break;
    case '4':
        require_once("../vista/elegir_actor.php");
        break;
}
