<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Crea una función que reciba dos números reales y devuelva su suma.</b></h3><br><br>

    <form action="ejercicio19.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero 1" >
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="Numero 2" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function sumar($n1, $n2){

            $res = $n1 + $n2;

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            echo "El resultado es: " . sumar($num1, $num2);
        }
    ?>
</body>
</html>