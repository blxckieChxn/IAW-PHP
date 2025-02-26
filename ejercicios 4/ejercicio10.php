<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Comprobar si una cadena tiene un carácter indicado</b></h3><br><br>

    <form action="ejercicio10.php" method="post">
        <div class="inicio">
            <input type="text" id="cadena" name="cadena" placeholder="Escribe algo" >
        </div>
        <div class="inicio">
            <input type="text" id="car" name="car" placeholder="Caracter a detectar" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cad = $_POST['cadena'];
            $i = $_POST['car'];
            $patron = "/[$i]/";

            if (preg_match_all($patron, $cad)){
                echo "El caracter indicado está en la cadena";
            } else {
                echo "No hay coincidencias";
            }
        }
    ?>
</body>
</html>