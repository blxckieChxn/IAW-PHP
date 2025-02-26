<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Crea una aplicación que nos pida un número y, mediante un procedimiento, nos
    indique si es este es primo o no</b></h3><br>

    <form action="ejercicio10.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function esPrimo($num){
            $flag=0;
            $cant=0;
            for($i=1; $i<=$num; $i++){
                if($num%$i == 0){
                    $cant++;
                }
            }   

            if($cant==2 || $num==1){
                $flag=1;
            }

            return $flag;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num1'];

            if(esPrimo($num)){
                echo "El numero $num es primo, enhorabuena!!";
            } else {
                echo "Que va illo, el numero $num no es primo, ya lo siento :(";
            }
        }
    ?>
</body>
</html>