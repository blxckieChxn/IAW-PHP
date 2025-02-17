<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio15.php" method="post">
    <h3><b> Escribir un programa que lea dos números y diga cual es el mayor y cual el menor</b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="primer num" required>
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="segundo num" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        
        if ($num1 > $num2){
            echo "Mayor: $num1 <br> Menor: $num2";
        } else if ($num2 > $num1) {
            echo "Mayor: $num2 <br> Menor: $num1";
        } else {
            echo "Los dos numeros son iguales";
        }
    }
    ?>
</body>
</html>