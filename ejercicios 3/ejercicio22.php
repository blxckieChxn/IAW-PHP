<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio22.php" method="post">
    <h3><b> Escribe un programa que calcule el factorial de n</b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num" name="num" placeholder="Numero" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
        function factorial($numero){
            $resultado = 1;

            if($numero < 0){
                return "Factorial no definido para numeros negativos";
            } else if ($numero == 0){
                 return 1;
            } 

            for ($i=1; $i<=$numero; $i++){
                $resultado = $resultado*$i;
                echo "Resultado: $resultado <br>";
            }
            
            return $resultado;
        }

        //===========================================================================

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num = $_POST["num"];
            $resultado = factorial($num);

            echo "El factorial de $num es: " . $resultado;
            
        }

        
    ?>
</body>
</html>