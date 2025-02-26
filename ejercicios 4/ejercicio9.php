<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Reemplazar texto en cadena.</b></h3><br><br>

    <form action="ejercicio9.php" method="post">
        <div class="inicio">
            <input type="text" id="cadena" name="cadena" placeholder="Escribe algo" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cad = $_POST['cadena'];
            $pattern = "/[asdf]/";

            if($cad == "Hola"){
                echo str_replace("Hola", "Vaya ejemplo predecible...", $cad);
            } else if ($cad == "hola"){
                echo str_replace("hola", "Vaya ejemplo predecible...", $cad);
            } else if (preg_match_all($pattern, $cad)){
                echo preg_replace($pattern, "Esto es reemplazo, pero mas raro", $cad);
            } else {
                echo "No hay coincidencias";
            }
        }
    ?>
</body>
</html>