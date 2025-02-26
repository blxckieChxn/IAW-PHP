<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Comprobar si una variable está vacía. (Enviar formulario vacio/relleno para la comprobación)</b></h3><br><br>

    <form action="ejercicio5.php" method="post">
    <div class="inicio">
        <input type="number" id="num1" name="num1" placeholder="Numero" >
    </div>

    <input type="submit" value="iniciar">
   
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $num = $_POST["num1"];
            
            if(empty($num)){
                echo "<br>La variable está vacia";
            } else {
                echo "<br>La variable no está vacia y vale: $num";
            }

        }
    ?>
</body>
</html>