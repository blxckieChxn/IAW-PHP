<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Obtener el máximo y/o el mínimo de tres números.</b></h3><br><br>

    <form action="ejercicio17.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero 1" >
        </div>

        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="Numero 2" >
        </div>

        <div class="inicio">
            <input type="number" id="num3" name="num3" placeholder="Numero 3" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            $max = max($num1, $num2, $num3);
            $min = min($num1, $num2, $num3);

            echo "<br>El maximo es: $max";
            echo "<br>El minimo es: $min";
            
        }
    ?>
</body>
</html>