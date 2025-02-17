<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3><b>Un programa que calcule la tabla de multiplicar de un número dado</b></h3><br><br>
<form action="ejercicio9.php" method="post">
    <div class="inicio">
        <input type="number" id="number" name="number" placeholder="Numero" required>
    </div>

    <input type="submit" value="iniciar">
</form>

    <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $num = $_POST["number"];
            echo "Tabla de multiplicar del numero $num:<br><br>";
            
            for ($i=1; $i<=10; $i++){
                if ($i != 10){
                    echo $num*$i . ", "; 
                } else{
                    echo $num*$i;
                }

            }
        }
    ?>
</body>
</html>