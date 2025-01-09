<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Un programa que dados la cantidad de alumnos y de alumnas que hay en tu clase, tras
        procesarlo, mostrará el porcentaje correspondiente a cada género. </b></h3><br>";

        $M = 12;
        $H =14;

        echo "Mujeres: $M<br> Hombre: $H<br>";
        $total = $M + $H;
        echo "En total hay $total alumnos<br>";
        $pM = $M/$total;
        $pM = round($pM,2);
        $pH = $H/$total;
        $pH = round($pH,2);
        echo "El porcentaje de mujeres es: $pM %<br> El porcentaje de hombres es: $pH %";
    ?>
</body>
</html>