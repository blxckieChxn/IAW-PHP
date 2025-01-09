<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Dada la velocidad de un coche, expresada en km/h, necesitamos saber cuántos metros por
        segundos recorrer.</h3></b><br><br>";

        $velocidad = 160; //hm/h
        echo "La velocidad del vehiculo es de $velocidad km/h<br>";
        $resultado = ($velocidad / 3600) * 1000;
        $resultado = round($resultado, 2);
        echo "El vehiculo va a $resultado m/s";
    ?>
</body>
</html>