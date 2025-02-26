<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Haz un procedimiento que reciba dos números y escriba en pantalla el factorial de
    cada número comprendido entre los dos pedidos</b></h3><br>

    <form action="ejercicio13.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero" >
        </div>

        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="Numero" >
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
            
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];

            if($num1 > 0 && $num2>0){
                for($i=$num1; $i<=$num2; $i++){
                    echo "<br>El factorial de $i es: " . factorial($i);
                }

            } else {
                echo "Los numeros tienen que ser positivos";
            }

            
        }
    ?>
</body>
</html>