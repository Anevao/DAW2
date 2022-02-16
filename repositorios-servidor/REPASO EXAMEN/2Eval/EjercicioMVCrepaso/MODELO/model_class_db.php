<?php
//creamos una clase para la conexion
class Conexion
{
    protected $db_connect;

    function __onstruct($db)
    {
        try{
            //objeto pdo hay k mandarle el driver que este string largo y luego el user y la pass
            $this->db_connect = new PDO("mysql:host=localhost; port=3306; dbname=".$db ,"root","" );
            $this->db_connect-> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            error_log($e->getMessage());
            die("la conexion no ha sido posible".$e->getMessage());
            
        }
    }
}
