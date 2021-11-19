<?php
class Libro{
    private $titulo;
    private $precio;
    private $desc;
    //constructor del objeto
    function __construct($titulo, $precio, $desc){
        $this->titulo= $titulo;
        $this->precio = $precio;
        $this->desc = $desc;
    } 
    
    function descuentoLibro(){
        if ($this->desc=='nav'){
           return 0.85;
        }else{
            return 0.75;
        }
    }

    function calculo(){
        $precioR=$this->precio*$this->descuentoLibro();
        echo "El libro". $this->titulo . "cuesta realmente" . $precioR . "€";
    }
    
}
//funcion q valida el dato precio
function valida_dato(){
    $patron='/\d+/';
    return preg_match($patron,$_POST["precio"]);
}
if(isset($_POST["enviar"])){
    if (isset($_POST["precio"])) {
        if(!empty($_POST["precio"])){
        if(valida_dato()==0){
            echo"Error.solo numeros en el campo precio por favor";
        }
        else{
            $libro = new Libro($_POST["nombre"], $_POST["precio"], $_POST["descuento"]);
            $libro->calculo();
        }
    }else{
        echo "Error: El campo del precio está vacío y es obligatorio";
    }
  
}}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 Alberto Nevado</title>
</head>
<body>
    <fieldset>
<form action="alberton2.php" target="_self" method="post">
        <label>
            Teclee el titulo <input type="text" name="nombre" required/><br>
        </label>
        <label>
            Teclee el precio <input type="text" name="precio" /><br>
        </label>
        <label>
            Elige fecha de compra: <br>
            <input type="radio" name="descuento" value="nav" checked/>Navidad 
            <input type="radio" name="descuento" value="flib"/>Feria del libro <br>
        <input type="submit" name="enviar" value="enviar"/>
    </form>
    </fieldset>
</body>
</html>