<?php
class Pelicula
{

    public function __construct()
    {
    }
    //public se puede llamar desde todos laos?
    public function query_peliculas_drama($conect)
    {
        //consulta , devuelve los titulos de la tbla columnas k el campo genero sea "drama"
        $sql = "SELECT titulo FROM peliculas WHERE genero='drama'";
        //conecta-- conect es un objeto sobre la conexion estableciada con la bd viene de bd_class------
        //consultar a fernando sensei
        $resultado = $conect->query($sql);
        $result = "";
        //la fila de donde sale??????
        while ($fila = $resultado->fetch_array()) {
            $result .= $fila["titulo"] . ';';
        }
        return $result;
    }
}
