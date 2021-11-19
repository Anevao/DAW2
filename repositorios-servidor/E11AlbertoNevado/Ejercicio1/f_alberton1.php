<?php
 //en esta funcion voy comparando el ahorro de cada provincia de forma individual y con 2 variables almaceno el que mas ahorra
 function ahorradores($galicia)
 {
     $ahorro = 0;
     $masAhorro=0;
     $provincia="";
     foreach ($galicia as $clave => $valor) {
         $ahorro=($galicia[$clave][0]-$galicia[$clave][1]);
         if($ahorro>$masAhorro){
             $masAhorro=$ahorro;
             $provincia=$clave;
         }          
     }
     return "La provincia que mas ahorra es " . $provincia . " que ahorra " . $masAhorro. "<br>";
 }

 //en esta funcion almaceno el ahorro total de las provincias y el ahorro mayor, despues hago la regla de 3 y calculo el % que pide el ex
 function porcentaje($galicia){
     $ahorrotot=0;
     $ahorro=0;
     $masAhorro=0;
     foreach ($galicia as $clave => $valor) {
         $ahorro=($galicia[$clave][0]-$galicia[$clave][1]);
         //totalizador del ahorro
         $ahorrotot=$ahorrotot + $ahorro;
         //almaceno el >ahorro
         if($ahorro>$masAhorro){
             $masAhorro=$ahorro;
         }
     }
     //en el propio return hago la regla de 3 y redonde con 2 decimales como se ve en el ej
     return "Un ". round(($masAhorro*100)/$ahorrotot, 2)."% del total";

 }

?>