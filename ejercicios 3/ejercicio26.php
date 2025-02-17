<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio26.php" method="post">
    <h3><b>Un programa simula el comportamiento de una calculadora con las 4 operaciones básicas:
        Suma, Resta, Multiplicación, División de dos números ingresados por el usuario. </b></h3><br><br>

        <div class="inicio">
            Numero: <input type="number" id="num1" name="num1" required>
        </div>
        <div class="inicio">
            Numero: <input type="number" id="num2" name="num2" required>
        </div>
        
        <div>
            <label for="op"> Selecciona una peracion: </label>
            <select id="op" name="op">
                <option value="suma">Suma (+)</option>
                <option value="resta">Resta (-)</option>
                <option value="mult">Multiplicacion (*)</option>
                <option value="div">Division (/)</option>
            </select>

        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            switch($_POST["op"]){
                case("suma"):
                    echo "El resultado de la operación es: $num1 + $num2= " . $num1+$num2;
                    break;
                case("resta"):
                    echo "El resultado de la operación es: $num1 - $num2= " . $num1-$num2;
                    break;
                case("mult"):
                    echo "El resultado de la operación es: $num1 x $num2= " . $num1*$num2;
                    break;
                case("div"):
                    echo "El resultado de la operación es: $num1 / $num2= " . $num1/$num2;
                    break;
            }
        }
    ?>
</body>
</html>