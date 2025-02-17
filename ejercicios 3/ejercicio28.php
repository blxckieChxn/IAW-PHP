<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio28.php" method="post">
    <h3><b>Pide los datos (base y altura) de dos triángulos y determina cuál de ellos tiene mayor área
            (llámalos primero y segundo).</b></h3><br><br>

        <div class="inicio">
            <h3><b>Triangulo 1</b></h3><br>
            Base: <input type="number" id="b1t1" name="b1t1" required>
            Altura: <input type="number" id="a1t1" name="a1t1" required>
        </div>
        <div class="inicio">
            <h3><b>Triangulo 2</b></h3><br>
                Base: <input type="number" id="b2t2" name="b2t2" required>
                Altura: <input type="number" id="a2t2" name="a2t2" required>
        </div>
        <br>
        <input type="submit" value="iniciar">
    </form>
   
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $b1t1 = $_POST["b1t1"];
            $a1t1 = $_POST["a1t1"];
            $b2t2 = $_POST["b2t2"];
            $a2t2 = $_POST["a2t2"];

            $area1= ($b1t1 * $a1t1)/2;
            $area2= ($b2t2 * $a2t2)/2;
           
            if($area1 > $area2){
                echo "El area del primer triangulo es mayor que la del segundo: $area1 > $area2 <br>";
            } else if ($area1 < $area2){
                echo "El area del segundo triangulo es mayor que la del primero: $area2 > $area1 <br>";
            } else {
                echo "Las dos areas son iguales <br>";
            }
        }
    ?>
</body>
</html>