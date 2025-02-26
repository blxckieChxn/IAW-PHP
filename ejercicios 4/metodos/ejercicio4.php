<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Crea un programa que reciba dos números y un código de operación y permita
calcular las operaciones básicas (suma, resta, multiplicación y división) entre estos
dos números.</b></h3><br><br>

    <form action="ejercicio22.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="num 1" >
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="num 2" >
        </div>

        <select id="op" name="op">
                <option value="+">Suma</option>
                <option value="-">Resta</option>
                <option value="*">Multiplicacion</option>
                <option value="/">Division</option>
            </select>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function calc($n1, $n2, $op){

            $res=0;
            switch($op){
                case"+":
                    $res = $n1+$n2; 
                    break;
                case"-":
                    $res = $n1-$n2;
                    break;
                case"*":
                    $res = $n1*$n2;
                    break;
                case"/":
                    $res = $n1/$n2;
                    break;
            }

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $op = $_POST['op'];

            echo "El resultado es: " . calc($n1, $n2, $op);
        }
    ?>
</body>
</html>