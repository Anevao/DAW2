
    <?php
    $respuesta= $_POST["valor"];
    for($i=0; $i<=10; $i++){
        echo "$respuesta * $i = ",$respuesta*$i,"</br>";
    }
    ?>