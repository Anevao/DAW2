<?php


$db_host="localhost";
$db_usuario = "root";
$db_clave = "";
$db_nombre = "ciclos";


/*establecemos conexion */
$conexion=mysqli_connect(
    /*3 parametros, la direccion del host, cuenta de la BD (root y sin pass x defecto),y nosecual*/
    $db_host,$db_usuario,$db_clave);
/*2 parametros si todo va bien devuelve un true sino un false*/
$ok=mysqli_select_db($conexion,"




");
if($ok){
    echo "conexion correcta";
}else{
    /*die: muestra el mensaje y acaba el script*/
    die("error en conexion");
}
/*variables de la base de datos para hacer el insert */
$id_al=$_POST['id_al'];
$nombre=$_POST['nombre'];
$edad=$_POST['edad'];
$id_curso=$_POST['id_curso'];
/* */
$sql="INSERT INTO alumno (id_al,nombre,edad,id_curso) VALUES (?,?,?,?)";
$consulta=mysqli_prepare($conexion,$sql);
mysqli_stmt_bind_param($consulta, 

/*string donde cada uno de los caracteres tiene que indicar
los tipode los parametos necesarios para formar la consulta
i numero s varchar*/ 
'isii',
/*los parametros que le hacen falta a esta funcion*/
$id_al,$nom,$edad,$codigo);
/*ejecutar consulta*/
$ok=mysqli_stmt_execute($consulta);
if ($ok){
    echo "insert correcto";
}else{
    /*como parametro pasamos la consulta en curso y devuelve el error */
    echo "insert incorrecto ".mysqli_stmt_error($consulta);
    mysqli_stmt_close($consulta);
}
?>