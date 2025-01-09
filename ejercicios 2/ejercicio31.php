<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h3><b>Calcular la tabla de multiplicar (de 0 a 10) de un número dado</b></h3><br><br>";
        $numero=3;
        for ($i=0; $i<=10; $i++) {
            if ($i != 10) {
                echo $numero*$i . ", ";
            } else {
                echo $numero * $i;
            }
        }
    ?>
</body>
</html>