<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>A un trabajador le pagan según sus horas trabajadas y la tarifa está a un valor por hora. Si la 
cantidad de horas trabajadas es mayor a 40 horas, la tarifa por hora se incrementa en un 50%
para las horas extras. Calcular el salario del trabajador dadas las horas trabajadas y la tarifa.</b></h3><br>";

    $horas=62;
    $tarifa=23.2;
    $sobresueldo=0;

    if ($horas > 40){
        $horasExtra = $horas - 40;
        $sobresueldo = ($tarifa*2) * $horasExtra;
    }

    if($sobresueldo != 0){
        $sueldo = 40*$tarifa + $sobresueldo;
    } else {
        $sueldo = $horas * $tarifa;
    }

    echo "El trabajador tiene anotadas $horas horas, con una tarifa de $tarifa €/h<br>";
    echo "Son más de 40 horas por lo que su sobresueldo será de: $sobresueldo y el sueldo por sus 40 horas son: " . $tarifa*40 . "€ <br>";
    echo "Por tanto cobrará: $sueldo €";

    ?>
</body>
</html>