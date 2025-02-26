<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Redondear un número hacia abajo.</b></h3><br><br>

    <form action="ejercicio18.php" method="post">
        <div class="inicio">
            <input type="decimal" id="num1" name="num1" placeholder="Numero 1" >
        </div>


        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num1 = $_POST['num1'];
            $num1 = floor($num1);
            echo "<br>El numero redondeado hacia abajo es: $num1";
            
        }
    ?>
</body>
</html>