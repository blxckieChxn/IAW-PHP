<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio29.php" method="post">
    <h3><b>Realizar un programa que imprima en pantalla los números primos comprendidos entre 1 y el
    100.</b></h3><br><br>
   
   <?php            
            
            for($i=1; $i<=100; $i++){
                $resto=0;
                $cant=0;
                
                for($div=1; $div<100; $div++){
                    $resto=$i % $div;
                    
                    if($resto==0){
                        $cant++;
                    }
                }
                if ($cant == 2){
                    echo "El numero $i es primo<br>";
                }
            }
    ?>
</body>
</html>