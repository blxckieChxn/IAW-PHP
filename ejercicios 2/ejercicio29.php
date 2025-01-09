<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        echo "<h3><b>Una tienda ofrece un descuento del 15% sobre el total de la compra durante el mes de octubre.
        Dado un mes y un importe, calcular cuál es la cantidad que se debe cobrar al cliente.</b></h3><br>";
        
        $mesCompra = 'octubre';
        $precioCompra=264.12;
        
        echo "La primera compra se hace en el mes de (". $mesCompra . ") y con un importe base de $precioCompra €<br><br>";

        $resultado = $precioCompra - ($precioCompra * 0.15);
        echo "El precio final es de: " . $resultado . " €";



    ?>
</body>
</html>