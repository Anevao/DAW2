<?php
require_once("lib/nusoap.php");

function suma($num1,$num2){
    $resultado=$num1+$num2;
    $resultado="El resultado de".$num1."+".$num2."=".$resultado;
    return($resultado);
}


$servicio =new nusoap_server();

$na="urn:miserviciowadl";//nombre del espacio de nombres

$servicio->configureWSDL("MiPrimerServicioWeb",$ns);//configuramos el servico 1º nombre 2º el espacio de nombres

$servicio->register("suma", array('num1'=>'xsd:integer','num2'=>'xsd:integer'),array('return'=>'xsd:string',$ns));//especificar registro
//el primer array son los parametros de entrada de nuestra fncion
//el siguiente array define los parametros de salida
//el nombre del espacio de nombres
$servicio->service(file_get_contents('php://input'));//le dice que va a ser un servicio de entrada de datos para los clientes q lo usen+-
?>