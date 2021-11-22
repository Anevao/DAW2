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
    
    //esta funcion da un valor al descuento segun lo que haya en los checkbox
    //un paso mas facil hubiera sido dar directamente al valor del checkbox el descuento
    //pero el ejercicio pedia una funcion para calcular este descuento
    function descuentoLibro(){
        if ($this->desc=='nav'){
           return 0.85;
        }else{
            return 0.75;
        }
    }

    //con los calores introducidos, realizamos lo q pide el ej mediante una funcion
    function calculo(){
        $precioR=$this->precio*$this->descuentoLibro();
        echo "El libro". $this->titulo . "cuesta realmente" . $precioR . "€";
    }
    
}
//funcion q valida el dato precio
function valida_dato(){
    //\d para aceptar solo digitos y el + para q siempre sea uno o mas, esto 
    //depuraria tambien el mandar el campo vacio, pero el mensaje de error no distinguiria
    //que has hecho mal , por lo tanto he decidido controlarlo abajo con el isset
    $patron='/\d+/';
    return preg_match($patron,$_POST["precio"]);
}
if(isset($_POST["enviar"])){
    if (isset($_POST["precio"])) {
        //vigila que no hayas dejado el campo vacio
        if(!empty($_POST["precio"])){
        if(valida_dato()==0){
            echo"Error.solo numeros en el campo precio por favor";
        }
        else{
            //creamos un objeto libro y llamamos a la funcion
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
    <style type="text/css">
        fieldset{
            width: 400px;
            margin: auto;
        }
        label{
            padding: 10px;

        }
        </style>
    <title>Ejercicio2 Alberto Nevado</title>
</head>
<body>
    <fieldset>
    <!--Formulario de envio de datos al script de php de la misma pagina usamos post -->
<form action="alberton2.php" target="_self" method="post">
        <label>
            Teclee el titulo <input type="text" name="nombre" required/><br><br>
        </label>
        <label>
            Teclee el precio <input type="text" name="precio" /><br><br>
        </label>
        <label>
            Elige fecha de compra: <br>
            <input type="radio" name="descuento" value="nav" checked/>Navidad 
            <input type="radio" name="descuento" value="flib"/>Feria del libro <br><br>
        <input type="submit" name="enviar" value="enviar"/>
    </form>
    </fieldset>
</body>
</html>