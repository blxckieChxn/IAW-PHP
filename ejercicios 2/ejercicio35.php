<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Los porcentajes de cada uno de los trimestres de matemáticas para este nuevo curso serán
        20%, 50% y 30% respectivamente. Realiza un programa que calcule la nota final de un alumno,
        aplicando estos porcentajes, a partir de sus notas parciales.
        </b></h3><br><br>";

        $trim1=3;
        $trim2=7;
        $trim3=5;

        echo "Las notas del alumno son: <br> Trimestre 1: $trim1<br> Trimestre 2: $trim2<br> Trimestre 3: $trim3 <br>";
        $notaFinal = ((0.2*$trim1) + (0.5*$trim2) + (0.3*$trim3));

        echo "La nota final del alumno es: $notaFinal";
    ?>
</body>
</html>