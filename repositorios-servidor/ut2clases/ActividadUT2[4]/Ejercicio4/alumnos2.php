<?php
class Alumno2{
    private $nom;
    private $edad;
    private $nota;
    const CICLO ="DAW";
    function __construct($nom, $edad, $nota){
        this->nom=$nom;
        this->edad=$edad;
        this->nota=$nota;
    }
    function superaCurso(){
        if($this->nota>5)
        echo "el alumno ".$nom."esta aprobado";
        else 
        echo "el alumno ".$nom."esta suspenso";
    }
}
class Primero extends Alumno2{

}
class Segundo extends Alumno2{
    //redefinicioin de constructor con otros datos
    function __construct($nom, $edad, $nota,$p,$fct){
        parent::__construct($nombre,$edad,$nota)
        this->califProy=$p;
        this->fct=$fct;
    }

//redefinicion de superar curso
    function superaCurso(){
        if($this->nota>=5 && $this->califProy>=5 && $this->fct=='apto')
        echo "el alumno ".$nom."acaba segundo";
        else 
        echo "el alumno ".$nom."repite segundo";
    }
}

/*class Alumno2{
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
    
    
}*/
?>