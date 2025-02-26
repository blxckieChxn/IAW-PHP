<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Escribe una función llamada conversionMoneda (…) que permita convertir una
cantidad de dinero dada en dólares, libras o yenes a euros. Estas son las
equivalencias aproximadas:
• 1 libra=1,22 euros
• 1 dolar=0,75 euros
• 1 yen=0.009 euros</b></h3><br>


    <form action="ejercicio5.php" method="post">
        <div class="inicio">
            <input type="decimal" id="num1" name="num1" placeholder="Cantidad" >
        </div>

        <select id="op" name="op">
                <option value="Y">Yen</option>
                <option value="L">Libra</option>
                <option value="$">Dolar</option>
            </select>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function conversionMoneda($cant, $op){

            $res=0; //variable resultado
            switch($op){
                case"Y":

                    $res=$cant*0.009;
                    break;

                case"L":
                    $res=$cant*1.22;
                    break;

                case"$":
                    $res=$cant*0.75;
                    break;
            }

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cant = $_POST['num1'];
            $op = $_POST['op'];

            echo "El cambio de $cant ($op) a euros (€) es: " . conversionMoneda($cant, $op) . " €";
        }
    ?>
</body>
</html>