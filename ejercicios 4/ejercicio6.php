<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Comprobar si una variable está definida y no es nula (no tiene valor y no es el ejercicio anterior).</b></h3><br><br>

    <form action="ejercicio6.php" method="post">
    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="Numero" >
    </div>

    <input type="submit" value="iniciar">
   
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            //Comentar esta variable para hacer la comprobacion
            $num = $_POST["num1"];

            if(isset($num)){
                echo "<br>La variable está definida";

                if ($num == null){
                    echo "<br>La variable es nula";
                } else {
                    echo "<br>La variable no es nula, y vale: $num";
                }
            
            } else {
                echo "<br>La variable no está definida";
            }

        }
    ?>
</body>
</html>