<?php
    $hermano1 = $_GET['hermano1'];
    $hermano2 = $_GET['hermano2'];

    if ($hermano1 > $hermano2) {
        $mayor = $hermano1;
        $diferencia = $hermano1 - $hermano2;

    } else {
        $mayor = $hermano2;
        $diferencia = $hermano2 - $hermano1;
          
    }  
    echo "La edad del hermano mayor es: $mayor <br>";
    echo "La diferencia de edad con el hermano menor es: $diferencia años";  
   

   
    ?>
