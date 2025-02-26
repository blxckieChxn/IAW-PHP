<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Crea un procedimiento que nos dado un número N, nos devuelva los primos
    anteriores a este.</b></h3><br>

    <form action="ejercicio11.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function primosAnteriores($num){
            $cant=0;
            $primos=array();
            
            for($j=1; $j<$num; $j++){
                for($i=1; $i<=$j; $i++){
                    if($j%$i == 0){
                        $cant++;
                    }
                }   

                if($cant==2 || $j==1){
                    array_push($primos, $j);
                }

                $cant=0;

            }

            echo "<br>Los numeros primos anteriores a $num son: ";
            for($k=0; $k<sizeof($primos); $k++){
                echo $primos[$k] . ", ";
            }
            
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num1'];
            primosAnteriores($num);
        }
    ?>
</body>
</html>