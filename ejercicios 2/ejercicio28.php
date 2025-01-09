<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<b><h3>Dadas dos variables numéricas A y B, que el usuario debe teclear, se pide realizar un algoritmo
        que intercambie los valores de ambas variables y muestre cuánto valen al final las dos
        variables</h3></b><br>";

        $var1=243;
        $var2=111;
        $aux;

        echo "A=$var1, B=$var2 <bR>";
        echo "Se realiza el intercambio <br>";
        $aux = $var1;
        $var1 = $var2;
        $var2 = $aux;
        echo "Valores cambiados<br>";
        echo "A=$var1, B=$var2";
    ?>
</body>
</html>