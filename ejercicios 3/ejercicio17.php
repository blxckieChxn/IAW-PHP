<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio17.php" method="post">
    <h3><b>Diseña un algoritmo que pida por teclado tres números; si el primero es negativo, debe
    imprimir el producto de los tres y si no lo es, imprimirá la suma</b></h3><br><br>
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

        if ($nums[0] < 0){
            $pr = array_product($nums);
            echo "Primer numero negativo <br> El resultado de la multiplicacion es: $pr";
        } else {
            $sm = array_sum($nums);
            echo "Primer numero <b>no</b> negativo <br> El resultado de la suma es: $sm";
        }
        
    }
    ?>
</body>
</html>