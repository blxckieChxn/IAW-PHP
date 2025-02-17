<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="ejercicio36.php" method="post">
    <h3><b>Implementar una calculadora en HTML y PHP que, además de sumar, restar, dividir y
    multiplicar, permita elevar un número a una potencia y que tenga una memoria de resultado, es decir, que
    pueda guardar el resultado de una suma, hacer otra operación y trabajar con el resultado de esta nueva
    operación y el resultado guardado previamente.</b></h3><br><br>
   
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
                <option value="pot">Potencia (n1^n2)</option>
            </select>

        </div>

        <input type="submit" value="iniciar">
    </form>
    
   <?php 
        session_start();
        $_SESSION['memoria'] = isset($_SESSION['memoria']) ? $_SESSION['memoria'] : array();
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $result=0;

            switch($_POST["op"]){
                case("suma"):
                    $result= $num1+$num2;
                    echo "El resultado de la operación es: $num1 + $num2= " . $result . "<br>";
                    break;
                case("resta"):
                    $result= $num1-$num2;
                    echo "El resultado de la operación es: $num1 - $num2= " . $result . "<br>";
                    break;
                case("mult"):
                    $result= $num1*$num2;
                    echo "El resultado de la operación es: $num1 x $num2= " . $result . "<br>";
                    break;
                case("div"):
                    $result= $num1/$num2;
                    echo "El resultado de la operación es: $num1 / $num2= " . $result . "<br>";
                    break;
                case("pot"):
                    $result= $num1**$num2;
                    echo "El resultado de la operación es: $num1 ^ $num2= " . $result . "<br>";
                    break;
            } 

            array_push($_SESSION['memoria'], $result);

            if(isset($_SESSION['memoria'])){
                mostrarMemoria();
            }
            
        }

        function mostrarMemoria(){
            for($i=0; $i < sizeof($_SESSION['memoria']); $i++){
                echo "Memoria [$i] = " . $_SESSION['memoria'][$i] . "<br>";
            }
        }
    ?>
</body>
</html>