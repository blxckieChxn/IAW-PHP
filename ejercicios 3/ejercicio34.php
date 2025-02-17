<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio34.php" method="post">
    <h3><b>Imprimir los números primos comprendidos en un rango entre dos números dados. El primer
    número será el límite inferior y el segundo el límite superior.</b></h3><br><br>
   
    <div class="inicio">
        <input type="number" id="num" name="num" min="1000" max="9999" placeholder="Num de 4 cifras" required>
    </div>

    <input type="submit" value="iniciar"><br>
   
   <?php            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num = $_POST["num"];
            
            $num = (string) $num;
            echo "<br>El numero original es: $num <br>";
            echo "El numero inverso es: " . strrev($num);
            
        }
    ?>
</body>
</html>