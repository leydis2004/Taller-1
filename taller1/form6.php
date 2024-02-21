<?php
    $volantes = $_GET["volantes"];
    $posters = $_GET["posters"];
    $tarjetas = $_GET["tarjetas"];

    $costo_volantes = $volantes * 2000;
    $costo_posters = $posters * 5000;
    $costo_tarjetas = $tarjetas * 500;

    if($total = $costo_volantes + $costo_posters + $costo_tarjetas){
     echo "total por volantes: $costo_volantes <br>";
     echo"Total por posters: $costo_posters <br>"; 
     echo "Total por Tarjetas de Presentación: $costo_tarjetas <br>"; 
     echo "Total a Pagar por Todas las Impresiones: $total <br>"; 

    }
    ?>