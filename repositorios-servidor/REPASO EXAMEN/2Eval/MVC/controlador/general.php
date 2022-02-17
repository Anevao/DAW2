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
        //hacemos un array con los titulos que devuelve la consulta
        $datos = explode(";", $result);
        //peliculas drama. php muestra con un for los titulos del array
        require_once("../vista/peliculas_drama.php");
        break;
    case '2':
        //llama al modelo class actores ahi se crea un objeto 
        //tipo actor que tiene una funcion q hace una consulta
        require_once("../modelo/model_class_actores.php");
        $actor = new Actor();
        //con el objeto tipo actor llama a la funcion 
        $result = $actor->query_nombre_actrices($c);
        $datos = explode(";", $result);
        require_once("../vista/nombres_actrices.php");
        break;
    case '3':
        //'3' => 'Actores de una Nacionalidad',
        require_once("../modelo/model_class_actores.php");
        $actor = new Actor();
        //devuelve las distintas nacionalidads de los actores
        $result = $actor->query_nacionalidades($c);
        //maneja los datos y los convierte en un array
        $datos = explode(";", $result);
        //nos lleva a elegir nacionalidad
        //donde nos lo mostrara en un desplegable y de ahi ara el resto de consutlas
        require_once("../vista/elegir_nacionalidad.php");
        break;
    case '4':
        require_once("../vista/elegir_actor.php");
        break;
}
