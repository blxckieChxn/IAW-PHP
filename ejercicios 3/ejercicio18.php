<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio18.php" method="post">
    <h3><b>Escribir un programa que lea un número entero e imprima todos los números impares menores que él </b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num" name="num" placeholder="numero entero" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = $_POST["num"];

        for ($i=$num; $i>0; $i--){
            if($i%2 != 0){
                echo "$i, ";
            }
        }
        
    }
    ?>
</body>
</html>