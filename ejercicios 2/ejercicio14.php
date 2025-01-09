<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<b><h3>Realizar un programa que, dada una cantidad de segundos, los pase a minutos y, estos, a
    horas. Tendrás que mostrar estos tres valores.</h3></b>";
    echo "<br>";

    $seg = 45963;
    echo "Empezamos con $seg segundos <br>";
    echo "$seg segundos son ->";
    $min = $seg /60;
    echo "$min min <br>";
    echo "$min minutos que son -> ";
    $h = $min/60;
    echo "$h horas";

    ?>
</body>
</html>