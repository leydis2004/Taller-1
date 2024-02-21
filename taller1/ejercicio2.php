<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Calcular Promedio de Estudiante</h2>
    <form action="form2.php" method="get">
        <label for="">Nombre del Estudiante:</label>
        <input type="text" id="nombre" name="nombre">
        <label for="">Nombre de la Asignatura:</label>
        <input type="text" id="asignatura" name="asignatura">
        <label for="">Nota 1:</label>
        <input type="text" step="0.1" id="nota1" name="nota1">
        <label for="">Nota 2:</label>
        <input type="text" step="0.1" id="nota2" name="nota2">
        <label for="">Nota 3:</label>
        <input type="text" step="0.1" id="nota3" name="nota3">
        <input type="submit" value="Calcular Promedio">
    </form>
</body>
</html>