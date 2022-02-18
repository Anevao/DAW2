<?php

class Usuario {
	private $nom;
    private $sesiones;
	function __construct ($n,$s)
	{
		$this->nom=$n;
        $this->sesiones=$s;
	}
	function __get($atrib)
	// método mágico para acceder a un atributo fuera de la clase
	{
		return($this->$atrib);
	}	
    function __set($n,$s)
	// método mágico para acceder a un atributo fuera de la clase
	{
		$this->nom=$n;
        $this->sesiones=$s;
	}	
	
} //fin de la clase Usuario

?>