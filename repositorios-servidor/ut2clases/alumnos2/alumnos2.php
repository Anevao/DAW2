<?php
class Alumno2{
    private $nom;
    private $edad;
    private $nota;
    const $ciclo ="DAW";

    function __construct($nom, $edad, $nota){
        this->nom=$nom;
        this->edad=$edad;
        this->nota=$nota;

    }/*
    static function superaCurso($nota,$nom){
        if($nota>5)
        echo "el alumno ".$nom."esta aprobado";
        else 
        echo "el alumno ".$nom."esta suspenso";
    }*/

}
class Primero extends Alumno2{
    static function superaCurso($nota,$nom){
        if($nota>5)
        echo "el alumno ".$nom."esta aprobado";
        else 
        echo "el alumno ".$nom."esta suspenso";
    }
}
class Segundo extends Alumno2{
    private $fct=false;
    private $protecto:
    
    
}
?>