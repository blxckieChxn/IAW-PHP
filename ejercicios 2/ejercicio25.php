<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>El nuevo banco nacional, va a aplicarle un 20% de interés a todos sus usuarios. Calcula cuál
        será la cantidad final de dinero que tendrás tras aplicarse este interés.</h3></b><br>";

        $initialD = 6192.34;
        echo "Tenemos $initialD € (ojala) <br>";
        $interes = (20*$initialD)/100;
        $interes = round($interes, 2);
        echo "El interes que nos corresponde es: $interes €<br>";
        $sumaFinal = $initialD+$interes;
        echo "La suma final que obtenemos es: $sumaFinal €";

    ?>
</body>
</html>