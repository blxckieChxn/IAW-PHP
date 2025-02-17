<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Escribir un programa que imprima por pantalla los números del 1 al 10.000.</b></h3><br><br>";

        for ($i=1; $i<=10000; $i++){
            if ($i != 10000){
                echo "$i, "; 
            } else{
                echo "$i";
            }

        }
    ?>
</body>
</html>