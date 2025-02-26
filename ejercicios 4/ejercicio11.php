<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Eliminar los espacios de una cadena.</b></h3><br><br>

    <form action="ejercicio11.php" method="post">
        <div class="inicio">
            <input type="text" id="cadena" name="cadena" placeholder="Escribe algo" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cad = $_POST['cadena'];
            $patron = "/\s/";

            if (preg_match_all($patron, $cad)){
                echo preg_replace($patron, "=/", $cad);
            } else {
                echo "No hay coincidencias";
            }
        }
    ?>
</body>
</html>