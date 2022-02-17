<?php
class Actor
{

    public function __construct()
    {
    }
    public function query_nombre_actrices($conect)
    {
        //query que devuelve el nombre de la tabla actores de sexo femenenino
        $sql = "SELECT nombre_apellidos FROM actores WHERE sexo='f'";

        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_array()) {
            $result .= $fila['nombre_apellidos'] . ';';
        }
        return $result;
    }

    public function query_nacionalidades($conect)
    {
        //devuelve las distintas nacionalidadse sin reptir
        $sql = "Select DISTINCT nacionalidad from actores";
        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_assoc()) {
            $result .= $fila['nacionalidad'] . ';';
        }
        return $result;
    }
    //consulta cuantos actores hay de la nacionalidad k se le manda desde vista elegir_nacionalidad
    public function query_nacionalizados($conect)
    {
        $nacionalidad = $_POST['nacionalidad'];
        $sql = "Select count(*) from actores where nacionalidad='$nacionalidad'";
        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_array()) {
            $result .= $fila[0];
        }
        return $result;
    }

    public function query_id_Actor($conect)
    {
        $nombre_actor = htmlspecialchars($_POST['actor']);
        $sql = "Select id_actor from actores where nombre_apellidos='$nombre_actor'";
        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_array()) {
            $result .= $fila[0];
        }
        return $result;
    }
}
