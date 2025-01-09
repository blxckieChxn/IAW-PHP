<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Tres empleados de una empresa de programación, han tenido la suerte de recibir un incentivo 
        (incremento de su sueldo) en relación a su producción, respectivamente: 13%, 26% y 39%.
        Realiza un programa que calcule los nuevos sueldos.
        </h3></b><br>";

        $sueldoBase = 2108;
        echo "El sueldo base de los tres empleados es: $sueldoBase €<br><br>";
        $s1=($sueldoBase*13)/100;
        echo "El incremento correspondiente al primer empleado (13%) es igual a $s1 €<br>";
        $s2=($sueldoBase*26)/100;
        echo "El incremento correspondiente al segundo empleado (26%) es igual a $s2 €<br>";
        $s3=($sueldoBase*39)/100;
        echo "El incremento correspondiente al tercer empleado (39%) es igual a $s3 €<br><br>";

        $sueldoFinal1=$sueldoBase+$s1;
        echo "El sueldo final del primer empleado es: $sueldoFinal1 €<br>";
        $sueldoFinal2=$sueldoBase+$s2;
        echo "El sueldo final del segundo empleado es: $sueldoFinal2 €<br>";
        $sueldoFinal3=$sueldoBase+$s3;
        echo "El sueldo final del tercer empleado es: $sueldoFinal3 €<br>";
        ?>
</body>
</html>