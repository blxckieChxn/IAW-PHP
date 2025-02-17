<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Escribir un programa que multiplique los 20 primeros números naturales (1*2*3*4*5…) y muestre el resultado</b></h3><br><br>";
        
        $resultado=1;
        for ($i=1; $i<=20; $i++){
 
            if ($i != 20){
                $resultado = $resultado * $i;
                echo  "$resultado, "; 
            } else{
                echo  $resultado = $resultado * $i;
            }

        }
    ?>
</body>
</html>