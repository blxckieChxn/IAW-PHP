<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Escribir un programa que imprima 200 veces la palabra “hola”</b></h3><br><br>";

        for ($i=1; $i<=200; $i++){
            if ($i != 200){
                echo "hola, "; 
            } else{
                echo "hola";
            }

        }
    ?>
</body>
</html>