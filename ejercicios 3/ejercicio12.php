<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><b> Escribir un programa que lea un número entero y realiza la suma de los 100 número siguientes, mostrando el resultado</b></h3><br><br>
    <form action="ejercicio12.php" method="post">
        <div class="inicio">
            <input type="number" id="number" name="number" placeholder="Numero" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        

        $numInicio=$_POST["number"];
        $sumatorio=$numInicio;
        
        for ($i=$numInicio+1; $i<=($numInicio+100); $i++){
            $sumatorio += $i;
            echo "$sumatorio, ";
        }
    }
    ?>
</body>
</html>