<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clases</title>
</head>
<body>
    <h1>Ejercicio 1</h1>
    <?php
        // clases la primera con mayus?
        class Alumno{
            //private
            //protected
            //public
            private $n_matricula;
            private $nombre;
            private $edad;
            //constantes en mayus
            const TASA_MATRICULA=2;
            //constructor del objeto
            function __construct($matr, $nom, $e){
                $this->n_matricula= $matr;
                $this->nombre = $nom;
                $this->edad = $e;
            } 
            //que pollas es esto
            function __toString(){
                return "Alumno".$this->nombre." ".$this->edad
            }
            function importe_matricula(){
                $importe=0;
                if ($this->edad>18){
                   $impote=self::TASA_MATRICULA;
                }
                echo "El precio es de". $importe." euros";
            }
            //static public...porque¿
            static function calculo(){
                a$ =new Alumno("123", "rober","20");
                return $a->importe_matricula();
            }
        }
            ?>
</body>
</html>