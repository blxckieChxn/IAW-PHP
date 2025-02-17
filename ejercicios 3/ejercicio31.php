<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio31.php" method="post">
    <h3><b>Escribir un programa que lea 10 notas de alumnos y nos informe cuántos tienen notas mayores
    o iguales a 7 y cuántos menores</b></h3><br><br>

    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="nota 1" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num2" name="num2" placeholder="nota 2" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num3" name="num3" placeholder="nota 3" >
    </div>

    <div class="inicio">
        <input type="number" id="num4" name="num4" placeholder="nota 4" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num5" name="num5" placeholder="nota 5" >
    </div>
        
    <div class="inicio">
        <input type="number" id="num6" name="num6" placeholder="nota 6" >
    </div>

    <div class="inicio">
        <input type="number" id="num7" name="num7" placeholder="nota 7">
    </div>

    <div class="inicio">
        <input type="number" id="num8" name="num8" placeholder="nota 8">
    </div>
        
    <div class="inicio">
        <input type="number" id="num9" name="num9" placeholder="nota 9">
    </div>

    <div class="inicio">
        <input type="number" id="num10" name="num10" placeholder="nota 10">
    </div>
        
    <input type="submit" value="iniciar">
   
   <?php            
            
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $notas = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"], $_POST["num6"], $_POST["num7"], $_POST["num8"], $_POST["num9"], $_POST["num10"]);
            $over=0;
            $under=0;
            for($i=0; $i<=(count($notas)-1); $i++){
                if($notas[$i] >= 7){
                    $over += 1;
                } else {
                    $under += 1;
                }
            }
            echo "<br>$over alumnos tienen notas superiores a 7<br>";
            echo "$under alumnos tienen notas inferiores a 7";
        }    
    ?>
</body>
</html>