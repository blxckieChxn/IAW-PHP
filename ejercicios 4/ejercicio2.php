<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b> Genera un número aleatorio comprendido entre dos dados.</b></h3><br><br>

    <form action="ejercicio2.php" method="post">
    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="Numero 1" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num2" name="num2" placeholder="Numero 2" >
    </div>

    <input type="submit" value="iniciar">
   
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $min = $_POST["num1"];
            $max = $_POST["num2"];
            
            $num = random_int($min,$max);
            echo "El numero es $num";

        }
    ?>
</body>
</html>