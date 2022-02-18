<?php
require_once("../modelo/bd_class.php");
require_once("../modelo/modelo_oposiciones.php");
$conec = new Conexion('oposiciones');
$c = $conec->bd_conect;
//el post consulta q viene de elegir trae un numero k decide aki lo k hacer
switch ($_POST['consulta']) {
    //'con plaza,
    case 'conplaza':
        $oposiciones = new Oposiciones();
        $result = $oposiciones->queryConplaza($c);
        $datos = explode("-", $result);
        //array con filas enteras separadas por ;
        require_once("../vista/resultados.php");
        break;
        //bolsa de trabajo
    case 'bolsa':
        $oposiciones = new Oposiciones();
        $result = $oposiciones->queryBolsa($c);
        $datos = explode("-", $result);
        require_once("../vista/resultados.php");
        break;
    case 'noaptos':
        $oposiciones = new Oposiciones();
        $result = $oposiciones->queryBolsa($c);
        $datos = explode("-", $result);
        require_once("../vista/resultadosinplaza.php");
        break;
    case 'borrar':
        $oposiciones = new Oposiciones();
        $result = $oposiciones->borrar($c,$_POST['opositor']);
        $datos = $result;
        require_once("../vista/visual.php");
        break;
    case 'insertar':
        $oposiciones = new Oposiciones();
        $result = $oposiciones->insertar($c,$_POST['cod_op'],$_POST['notap'],$_POST['notat']);
        $datos = $result;
        require_once("../vista/visual.php");
        break;
}
?>