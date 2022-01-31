<?php
$nomfich1="modulos.txt";
$fich1=fopen($nomfich1,"a+");//a+ para añadir info al final del fichero
$dato="dwes;9\n";
fputs($fich1,$dato);//escribe un nuevo registro
$dato="dwec;8\n";
fwrite($fich1,$dato);
fclose($fich1);
