<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Escribe una función que devuelva el resultado de un número elevado a un
    exponente dado.</b></h3><br><br>

    <form action="ejercicio21.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="numero" >
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="exponente" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function pot($n1, $n2){

            $res = $n1**$n2;

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num1'];
            $exp = $_POST['num2'];

            echo "El resultado es: " . pot($num, $exp);
        }
    ?>
</body>
</html>