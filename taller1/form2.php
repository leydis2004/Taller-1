<?php
    $nombre = $_GET["nombre"];
    $asignatura = $_GET["asignatura"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
    $nota3 = $_GET["nota3"];
    
    if($promedio = ($nota1 + $nota2 + $nota3) / 3){
        echo "<h3>Nombre del Estudiante:</h3> $nombre";
        echo "<h3>Nombre de la Asignatura: </h3> $asignatura ";
        echo "<h3>Promedio de Notas:</h3> $promedio";  
    }
    
  
    ?>