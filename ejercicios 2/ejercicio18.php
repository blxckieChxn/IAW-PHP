<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<b><h3>Dada las horas trabajadas de una persona y el sueldo por hora, calcular su salario e imprimirlo</h3></b>";
        echo "<br>";
        $horas=160;
        echo "Tenemos un total de $horas horas trabajadas<br>";
        $sueldoHora=15.4;
        echo "Si el sueldo por hora es: $sueldoHora €/h <br>";
        $salario = $horas * $sueldoHora;
        echo "El salario total es: $salario €";
    ?>
</body>
</html>