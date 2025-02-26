<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b> Convertir un número decimal a entero.</b></h3><br><br>

    <form action="ejercicio3.php" method="post">
    <div class="inicio">
        <input type="decimal" id="num1" name="num1" placeholder="Numero decimal" >
    </div>

    <input type="submit" value="iniciar">
   
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST["num1"];
            
            $num = (int)$num;
            echo "<br>El numero se ha convertido en: $num";
            

        }
    ?>
</body>
</html>