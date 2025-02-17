<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Escribir un programa imprima por pantalla los números del 5 al 10.</b></h3><br><br>";

        for ($i=5; $i<=10; $i++){
            if ($i != 10){
                echo "$i, "; 
            } else{
                echo "$i";
            }

        }
    ?>
</body>
</html>