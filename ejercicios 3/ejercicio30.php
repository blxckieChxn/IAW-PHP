<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio30.php" method="post">
    <h3><b>Desarrollar un programa que permita introducir 10 valores dado y nos muestre la suma de los
    valores ingresados y su promedio</b></h3><br><br>

    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="valor 1" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num2" name="num2" placeholder="valor 2" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num3" name="num3" placeholder="valor 3" >
    </div>

    <div class="inicio">
        <input type="number" id="num4" name="num4" placeholder="valor 4" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num5" name="num5" placeholder="valor 5" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num6" name="num6" placeholder="valor 6" >
    </div>

    <div class="inicio">
        <input type="number" id="num7" name="num7" placeholder="valor 7">
    </div>
        
    <div class="inicio">
        <input type="number" id="num8" name="num8" placeholder="valor 8">
    </div>
        
    <div class="inicio">
        <input type="number" id="num9" name="num9" placeholder="valor 9">
    </div>

    <div class="inicio">
        <input type="number" id="num10" name="num10" placeholder="valor 10">
    </div>

    <input type="submit" value="iniciar">
   
   <?php            
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $nums = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"], $_POST["num6"], $_POST["num7"], $_POST["num8"], $_POST["num9"], $_POST["num10"]);

            echo "<br>La suma de los valores es: " . array_sum($nums). "<br>";
            echo "La media de los valores es: " . array_sum($nums)/count($nums);

            
        }    
    ?>
</body>
</html>