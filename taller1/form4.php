<?php
   
    $horas_laboradas = $_GET["horas_laboradas"];
    $valor_hora = $_GET["valor_hora"];

    if($sueldo = $horas_laboradas * $valor_hora){
        echo "<p>El sueldo a pagar es: $sueldo</p>";
    }
 
    ?>