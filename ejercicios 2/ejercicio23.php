<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Debido a la nueva situación excepcional, una farmacia va a aplicar un descuento a sus
        productos del 10%. Realizar un programa que muestre el nuevo precio de un artículo dado.
        </h3></b><br>";

        $art = 34;
        echo "Precio original del articulo: $art € <br>";
        $desc = (10*$art)/100;
        echo "El descuento seria: $desc € <br>";
        $precioFinal = $art - $desc;
        echo "Precio final = $precioFinal";
    ?>
</body>
</html>