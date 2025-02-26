<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Escribe una función que devuelva el factorial de un número N (siendo N un número
    entero positivo). El factorial de 5 es el resultado de 5*4*3*2*1.</b></h3><br>

    <form action="ejercicio12.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function factorial($num){
            $res=1;
            
            for($i=1; $i<=$num;$i++){
                $res=$res*$i;
            }

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num1'];
            if($num > 0){
                echo "El fatorial de $num es: " . factorial($num);
            } else {
                echo "<br>El numero no puede ser negativo";
            }
        }
    ?>
</body>
</html>