<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio19.php" method="post">
    <h3><b>Según la edad de una persona, lo clasificaremos en las siguientes etapas: Infancia (menor de
    catorce años), Juventud (entre catorce y 26 años), Adultez (entre 27 y 59 años) y personas mayores (igual o
    superiores a 60 años).  </b></h3><br><br>
        <div class="inicio">
            <input type="number" id="num" name="num" placeholder="Edad persona" required>
        </div>

        <input type="submit" value="iniciar">
    </form>
   
   <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST["num"];
        
        echo "Etapa: ";
        switch($edad){
            
            case($edad < 14):
                echo "<b>Infancia</b>";
            break;
            case($edad >= 14 && $edad <= 26):
                echo "<b>Juventud</b>";
            break;
            case ($edad >= 27 && $edad < 59):
                echo "<b>Adultez</b>";
            break;
            case ($edad >= 60):
                echo "<b>Vejez</b>";
        }
        
    }
    ?>
</body>
</html>