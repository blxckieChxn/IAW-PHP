<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><b> Escribir un programa que convierta de euros a dólares. Recibirá un número decimal
correspondiente a la cantidad en euros y contestará con la cantidad correspondiente en dólares.</b></h3><br><br>
    <form action="ejercicio13.php" method="post">
        <div class="inicio">
            <input type="number" id="number" name="number" placeholder="Numero" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $euros=$_POST["number"];
        $dolares = $euros * 1.02;
        echo "$euros € son $dolares $";
    }
    ?>
</body>
</html>