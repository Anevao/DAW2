<?php
$nomfich1="D:\modulos.txt";
$fich1=fopen($nomfich1,"a+");//a+ para añadir info al final del fichero
$dato="dwes;9".PHP_EOL;//PHP_EOL es una constante predefinida para hacer intro 
fputs($fich1,$dato);//escribe un nuevo registro
$dato="dwec;8\n";
fwrite($fich1,$dato);
fclose($fich1);

$nomfich2="D:\calificar.csv";
$fich2=fopen($nomfich2,"a+");//a+ para añadir info al final del fichero
$dato=array('4,25','5,75','5','aprobado');

fputcsv($fich2,$dato);//escribe un nuevo registro
$tabla=array(
    array('5','5','5','arpobado'),
    array('6','6','6','bien')
);
foreach($tabla as $campos)
    fputcsv($fich2,$dato,',');

fclose($fich2);
?>
