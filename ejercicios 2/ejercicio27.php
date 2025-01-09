<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Algoritmo que, dados dos números, calculando y escribiendo el valor de su suma, resta,
        producto y división.</h3></b><br>";

        $num1=3482534;
        echo "El primer numero es: $num1 <br>";
        $num2=2345634;
        echo "El primer numero es: $num2 <br><br>";

        $suma = $num1 + $num2;
        echo "La suma es: $suma <br>";

        $resta = $num1 - $num2;
        echo "La resta es: $resta<br>";

        $prod = $num1 * $num2;
        echo "El producto es: $prod <br>";

        $div = $num1 / $num2;
        $div = round($div, 2);
        echo "La division es: $div";
    ?>
</body>
</html>