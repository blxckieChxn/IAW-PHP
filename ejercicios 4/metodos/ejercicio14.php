<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Crea un procedimiento que indique la posición de la primera ocurrencia de un dígito
dentro de un número (se le pasan ambos por parámetros). Si no se encuentra,
devuelve -1.</b></h3><br>

    <form action="ejercicio14.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero" >
        </div>

        <div class="inicio">
            <input type="number" id="num2" name="num2" placeholder="Ocurrencia" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function busqueda($num, $oc){
            $flag=-1;
            $pos=0;
            
            $num = (string)$num;
            
            for($i=0; $i<strlen($num); $i++){

                if($num[$i] == $oc){
                    $flag=1;
                    $pos = $i;
                } 
            }

            if($flag == -1){
                echo "<br>La ocurrencia $oc no está en el numero indicado";
                echo "<br>Flag: $flag";
            } else {
                echo "La ocurrencia $oc está en la posicion $pos";
            }


            return $flag;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num1'];
            $oc = $_POST['num2'];

            if($num > 0 && $oc > 0){
                busqueda($num, $oc);

            } else {
                echo "Los numeros tienen que ser positivos";
            }

            
        }
    ?>
</body>
</html>