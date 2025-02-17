<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio35.php" method="post">
    <h3><b>Un programa que permita convertir un número decimal (entero) a binario.</b></h3><br><br>
   
    <div class="inicio">
        <input type="number" id="num" name="num" placeholder="Numero" required>
    </div>

    <input type="submit" value="iniciar"><br>
   
   <?php            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $num = $_POST["num"];  
            $bin=array();
            
            echo "<br> El numero $num en binario es -> ";
            while($num>=1){
                $res = $num%2;
                array_push($bin, $res);
                
                
                if($num == 0 || $num == 1){
                    $var = $num/2;
                    if ($var > 0 && $var < 1){
                        $var = 0.00;
                    }
                    array_push($bin, $var);
                    $num=0;
                } else {
                    $num = $num/2;
                }
            }
            $bin = array_reverse($bin);
            echo "0";
            for($i=0; $i<sizeof($bin); $i++){
                echo $bin[$i];
            }

        }
    ?>
</body>
</html>