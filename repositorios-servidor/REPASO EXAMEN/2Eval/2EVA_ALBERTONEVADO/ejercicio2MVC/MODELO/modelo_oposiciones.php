<?php
class Oposiciones
{

    public function __construct()
    {
    }
    public function queryConplaza($conect)
    {
        $sql = "SELECT * FROM resultados WHERE notap>5 AND notat>5";
        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_assoc()) {
            $result .='<h3>'. $fila['cod_op'] . '</h3><br>'.$fila['notap'] . '<br>'.$fila['notat'] . '<br>'.'-';
        }
        return $result;
    }
    public function queryBolsa($conect)
    {
        $sql = "SELECT * FROM resultados WHERE notap>5 OR notat>5";
        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_assoc()) {
            $result .='<h3>'. $fila['cod_op'] . '</h3><br>'.$fila['notap'] . '<br>'.$fila['notat'] . '<br>'.'-';
        }
        return $result;
    }
    public function querySinplaza($conect)
    {
        $sql = "SELECT count(*) FROM resultados WHERE (notap<5 AND notat>5)OR(notap>5 AND notat<5)";
        $resultado = $conect->query($sql);
        $result = "";
        while ($fila = $resultado->fetch_array()) {
            $result .= $fila[0];
        }
        return $result;
    }
    public function borrar($conect,$id)
    {
        $sql = "DELETE FROM resultados WHERE cod_op =".$id;
        $resultado = $conect->query($sql);
        if($resultado){
            $result = "se ha borrado".$id."si existiese";
        }else{
            echo mysqli_error($conect);
        }
        return $result;
    }
    public function insertar($conect,$id,$n1,$n2)
    {
        $sql = "insert into resultados(cod_op, notap, notat) values(".$id.", ".$n1.", ".$n2.")";
        $resultado = $conect->query($sql);
        if($resultado){
            $result = "se ha insertado".$id;
        }else{
            echo mysqli_error($conect);
        }
        return $result;
    }

   
}