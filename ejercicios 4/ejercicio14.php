<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Dividir una cadena (frase) en palabras individuales.</b></h3><br><br>

    <form action="ejercicio14.php" method="post">
        <div class="inicio">
            <input type="text" id="cadena" name="cadena" placeholder="Escribe una frase" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cad = $_POST['cadena'];
            
            $resultado = explode(" ", $cad);

            for($i=0; $i<sizeof($resultado); $i++){
                echo "<br>Palabra [$i] = " . $resultado[$i];
            }
        }
    ?>
</body>
</html>