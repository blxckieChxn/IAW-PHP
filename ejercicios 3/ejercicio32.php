<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio32.php" method="post">
    <h3><b>Escribir un programa que lea 10 números enteros y luego muestre cuántos valores son
    múltiplos de 3 y cuántos son de 5, por otro lado, se deberá indicar cuantos números son múltiplos de ambos a
    la vez</b></h3><br><br>

    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="num 1" required>
    </div>
        
    <div class="inicio">
        <input type="number" id="num2" name="num2" placeholder="num 2" required>
    </div>
        
    <div class="inicio">
        <input type="number" id="num3" name="num3" placeholder="num 3" required>
    </div>

    <div class="inicio">
        <input type="number" id="num4" name="num4" placeholder="num 4" required>
    </div>
        
    <div class="inicio">
        <input type="number" id="num5" name="num5" placeholder="num 5" required>
    </div>
        
    <div class="inicio">
        <input type="number" id="num6" name="num6" placeholder="num 6" required>
    </div>

    <div class="inicio">
        <input type="number" id="num7" name="num7" placeholder="num 7" required>
    </div>

    <div class="inicio">
        <input type="number" id="num8" name="num8" placeholder="num 8" required>
    </div>
        
    <div class="inicio">
        <input type="number" id="num9" name="num9" placeholder="num 9" required>
    </div>

    <div class="inicio">
        <input type="number" id="num10" name="num10" placeholder="num 10" required>
    </div>
        
    

    <input type="submit" value="iniciar">
   
   <?php            
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $numeros = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"], $_POST["num6"], $_POST["num7"], $_POST["num8"], $_POST["num9"], $_POST["num10"]);
            $divV= array();
            $divIII=array();
            $both=array();

            $flagV=0;
            $flagIII=0;
            for($i=0; $i<sizeof($numeros); $i++){
                
                if(intval($numeros[$i]) % 5 == 0){
                    $flagV=1;
                    array_push($divV, $numeros[$i]);
                }
                
                if(intval($numeros[$i]) % 3 == 0){
                    $flagIII=1;
                    array_push($divIII, $numeros[$i]);
                }

                if($flagIII==1 && $flagV==1){
                    array_push($both, $numeros[$i]);
                    $flagIII=0;
                    $flagV=0;
                } else{
                    $flagIII=0;
                    $flagV=0;
                }
            }

            echo "<br> Los numeros: ";
            for($a=0; $a<sizeof($divIII); $a++){
                echo $divIII[$a] . ", ";
            }
            echo "son multiplos de 3 <br>";
            
            echo "<br> Los numeros: ";
            for($b=0; $b<sizeof($divV); $b++){
                echo $divV[$b] . ", ";
            }
            echo "son multiplos de 5 <br>";

            echo "<br> Los numeros: ";
            for($c=0; $c<sizeof($both); $c++){
                echo $both[$c] . ", ";
            }
            echo "son multiplos de 3 y 5 <br>";
                  
        }    
    ?>
</body>
</html>