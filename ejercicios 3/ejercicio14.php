<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio14.php" method="post">
    <h3><b> Escribir un programa que calcule el área de un rectángulo del cual se le proporcionará por el
        teclado su altura y anchura (números decimales).
        </b></h3><br><br>
        <div class="inicio">
            <input type="number" id="alt" name="alt" placeholder="altura" required>
        </div>
        <div class="inicio">
            <input type="number" id="anch" name="anch" placeholder="anchura" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $alt=$_POST["alt"];
        $anch = $_POST["anch"];
        $resultado = $alt * $anch;
        echo "El área del rectangulo es de $resultado m2";
    }
    ?>
</body>
</html>