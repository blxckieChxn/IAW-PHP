<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Escribe una función que devuelva el área de un círculo dado su radio. Recuerda
    que, para calcular el área, la fórmula es Π * r2.</b></h3><br><br>

    <form action="ejercicio20.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="radio del circulo" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function area($n1){

            $res = pi()*($n1**2);

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num1 = $_POST['num1'];

            echo "El resultado es: " . area($num1) . "m^2";
        }
    ?>
</body>
</html>