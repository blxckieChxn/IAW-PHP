<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio33.php" method="post">
    <h3><b>Imprimir los números primos comprendidos en un rango entre dos números dados. El primer
    número será el límite inferior y el segundo el límite superior.</b></h3><br><br>
   
    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="Numero inferior" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num2" name="num2" placeholder="Numero superior" >
    </div>

    <input type="submit" value="iniciar"><br>
    
    <?php            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $min = $_POST["num1"];
            $max = $_POST["num2"];

            for($i=$min; $i<=$max; $i++){
                $resto=0;
                $cant=0;
                
                for($div=1; $div<$max; $div++){
                    $resto=$i % $div;
                    
                    if($resto==0){
                        $cant++;
                    }
                }
                if ($cant == 2){
                    echo "El numero $i es primo<br>";
                }
            }
        }
    ?>
</body>
</html>