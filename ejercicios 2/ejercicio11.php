<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<b><h3>Este módulo está dividido en tres bloques. Dadas tres notas de un alumno, calcula su media.</h3></b><br>";
        $nota1 = 3;
        echo "Nota 1= $nota1 <br>";
        $nota2 = 8;
        echo "Nota 2= $nota2 <br>";
        $nota3 = 5;
        echo "Nota 3= $nota3 <br>";
        $media = ($nota1 + $nota2 + $nota3)/3;
        echo "la media es: $media";
    ?>
</body>
</html>