<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h3><b>Dados los catetos de un triángulo, calcula su hipotenusa.</b></h3><br><br>";
        $cat1=234;
        $cat2=323;
        echo "Cateto 1 = $cat1 y cateto 2 = $cat2<br>";
        $hip = ($cat1*$cat1) + ($cat2*$cat2);
        $resultado = sqrt($hip);
        $resultado = round($resultado, 2);
        echo "Resultado = $resultado";
    ?>
</body>
</html>