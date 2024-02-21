<?php

$velocidad = $_GET['velocidad'];
$tiempo = $_GET['tiempo'];

if($distancia = $velocidad * $tiempo){
    echo "<h2>Resultado</h2>";
    echo "Distancia recorrida: $distancia metros";
}


?>
