<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Calcular la potencia de un número.</b></h3><br><br>

    <form action="ejercicio16.php" method="post">
        <div class="inicio">
            <input type="number" id="num" name="num" placeholder="Numero" >
        </div>

        <div class="inicio">
            <input type="number" id="pot" name="pot" placeholder="Potencia" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST['num'];
            $pot = $_POST['pot'];
            
            echo "El resultado es: " . $num**$pot;
        }
    ?>
</body>
</html>