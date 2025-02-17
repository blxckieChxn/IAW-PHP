<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio21.php" method="post">
    <h3><b> Escriba un programa que lea los coeficientes a, b y c de una ecuación de segundo, y estudie si
    tiene o no solución. En caso positivo, las soluciones se calcularán e imprimirán en pantalla.</b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="A" required>
        </div>
        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="B" required>
        </div>
        <div class="inicio">
            <input type="number" id="num3" name="num3" placeholder="C" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST["num1"];
            $b = $_POST["num2"];
            $c = $_POST["num3"];
            
        if($a==0){
            echo "<b>Error: A no puede ser 0 </b>";
        }

        //analizar discriminante
        $disc = ($b*$b) - (4*$a*$c);

        if ($disc < 0){
            echo "No existen soluciones reales";
        } else if ($disc == 0){
            echo "Existe una solucion real<br>";
            $res = -$b/(2*$a);
            echo "<b>Solucion:</b> $res";
        } else {
            echo "Existen dos soluciones reales<br>";
            $solucion1 = (-$b + sqrt($disc)) / (2 * $a);
            $solucion2 = (-$b - sqrt($disc)) / (2 * $a);
            echo "<b>Solucion 1: </b>$solucion1 <br> <b>Solucion 2: $solucion2</b>";
        }
    }
    ?>
</body>
</html>