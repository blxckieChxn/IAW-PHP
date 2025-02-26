<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Calcular la raíz cuadrada de un número dado.</b></h3><br><br>

    <form action="ejercicio4.php" method="post">
    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="Numero" >
    </div>

    <input type="submit" value="iniciar">
   
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST["num1"];
            
            $resultado = sqrt($num);
            echo "<br>La raiz cuadrada de $num es $resultado";

        }
    ?>
</body>
</html>