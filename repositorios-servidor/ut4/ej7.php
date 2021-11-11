<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //FUNCION VALIDACION
    function valida_dato(){
        return preg_match("/^[a-z](3,)/i",$_POST['dato']);
    }
    //RECOGIDA DE DATOS
    $Errordato="";
    if(isset($_POST['enviar'])){
        if(!empty($_POST['dato']))
        if(valida_dato()==0)
        $Errordato="Error. solo caracteres de este tipo az AZ";
        else
        {
            //el dato cumple con el patron
            if($_POST['dato']=='blanco')
            {
                echo "acertaste";
                exit;
                
            }else
            echo "fallaste vuelve a intentar";

        }}
        else
        $Errordato='el dato esta vacio';

         //falta parte html
          
    ?>
</body>
</html>