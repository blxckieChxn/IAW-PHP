<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio25.php" method="post">
    <h3><b>Leer un número de un dígito y escribir su correspondiente en letra según el alfabeto castellano.
        Leer una letra que corresponda a un número romano (carácter) y encontrar su valor en números
        decimales, en caso contrario, decir que no es un número romano válido</b></h3><br><br>
        <div class="inicio">
            Numero: <input type="number" id="num" name="num" min="0" max="9" required>
        </div>
        <br>
        <div class="inicio">
            Numero romano (Mayus): <input type="text" id="rom" name="rom" maxlength="1" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $num = $_POST["num"];
            $rom = $_POST["rom"];
                            
            $letras = array("a", "b", "c", "d", "e", "f", "g", "h", "i");
            
            echo "La letra correspondiente al numero $num es: " . $letras[$num-1] . "<br>";
           
            switch($rom){
                case("I"):
                    echo "La letra $rom se corresponde con el numero 1";
                    break;
                case("V"):
                    echo "La letra $rom se corresponde con el numero 5";
                    break;
                case("X"):
                    echo "La letra $rom se corresponde con el numero 10";
                    break;
                case("L"):
                    echo "La letra $rom se corresponde con el numero 50";
                    break;
                case("C"):
                    echo "La letra $rom se corresponde con el numero 100";
                    break;
                case("D"):
                    echo "La letra $rom se corresponde con el numero 500";
                    break;
                case("M"):
                    echo "La letra $rom se corresponde con el numero 1000";
                    break;  
                default:
                    echo "Introduce una letra que se corresponda con un numero romano";
                    break;          
            }
           
        
    }
    ?>
</body>
</html>