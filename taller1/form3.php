<?php
    $ganados = $_GET['ganados'];
    $perdidos = $_GET['perdidos'];
    $empatados = $_GET['empatados'];
    

    $puntaje_ganados = $ganados * 3;
    $puntaje_perdidos = $perdidos * 0;
    $puntaje_empatados = $empatados * 1;
    
    if($puntaje_total = $puntaje_ganados + $puntaje_perdidos + $puntaje_empatados){
    echo "<p>Total de puntos del equipo: $puntaje_total puntos</p>";
    }
    

    ?>