<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Escribir un programa que sume los cuadrados de los cien primeros números naturales, mostrando el resultado en pantalla.
</b></h3><br><br>";
        
        $resultado=0;
        for ($i=0; $i<=100; $i++){
 
            if ($i != 100){
                $resultado = $resultado + ($i*$i);
                echo  "$resultado, "; 
            } else{
                $resultado = $resultado + ($i*$i);
                echo  $resultado;
            }

        }
    ?>
</body>
</html>