<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio16.php" method="post">
    <h3><b> Escriba un programa que lea tres números enteros positivos, y que calcule e imprima en
    pantalla el menor y el mayor de todos ellos.</b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="primer num" required>
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="segundo num" required>
        </div>
        <div class="inicio">
            <input type="number" id="num3" name="num3" placeholder="tercer num" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $num3 = $_POST["num3"];
        $nums = array($num1, $num2, $num3);

        sort($nums);
        $max = $nums[2];
        $min = $nums[0];
        echo "Mayor: " . $max . "<br>" .  "Menor: " . $min;
        
        
    }
    ?>
</body>
</html>