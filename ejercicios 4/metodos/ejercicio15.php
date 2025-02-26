<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Crea una función que le de la vuelta a un número.</b></h3><br>

    <form action="ejercicio15.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero" >
        </div>


        <input type="submit" value="iniciar">
    </form>
   <?php

        function reverse($num){
            
            $num=(string)$num;
            $revNum = strrev($num);
            $revNum=(int)$revNum;
            return $revNum;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num1'];
            
            echo "El numero $num dado la vuelta es: " . reverse($num);

            
        }
    ?>
</body>
</html>