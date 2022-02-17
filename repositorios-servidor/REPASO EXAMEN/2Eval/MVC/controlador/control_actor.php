<?php
//aqui metemos la conexion a base de datos otra vez
require_once("../modelo/bd_class.php");
$conec = new Conexion('cinema');
//conectamos con la base de dato cinema
$c = $conec->bd_conect;
require_once("../modelo/model_class_actores.php");
$actor = new Actor();
//creamos el objeto actor llamando al modelo de case actores y alli hace la consulta de
$result = $actor->query_nacionalizados($c);
//esta vez no lo explodea xk es un numero
$datos =  $result;
//por ultimo saca un mensaje en la ultima vista, vaya tela
require_once("../vista/num_nacionalidades.php");
