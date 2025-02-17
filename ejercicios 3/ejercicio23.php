<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio23.php" method="post">
    <h3><b> Escriba un programa que lea temperaturas expresadas en grados Fahrenheit y las convierta a
            grados Celsius mostrándola. El programa finalizará cuando lea un valor de temperatura igual a 999. La
            conversión de grados Farenheit (F) a Celsius (C) está dada por C = 5/9*(F - 32).</b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num" name="num" placeholder="Temperatura" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fahr = $_POST["num"];
            
            $cel = (($fahr-32)*5)/9;
            echo "Temperatura en Celsios es: $cel";

        
    }
    ?>
</body>
</html>