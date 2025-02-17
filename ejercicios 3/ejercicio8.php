<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Escribir un programa que imprima por pantalla los cuadrados de los 30 primeros números naturales</b></h3><br><br>";

        for ($i=1; $i<=30; $i++){
            if ($i != 30){
                echo $i*$i . ", "; 
            } else{
                echo $i*$i;
            }

        }
    ?>
</body>
</html>