<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Contar el número de palabras en una frase (cadena)</b></h3><br><br>

    <form action="ejercicio13.php" method="post">
        <div class="inicio">
            <input type="text" id="cadena" name="cadena" placeholder="Escribe una frase" >
        </div>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cad = $_POST['cadena'];
            
            echo "<br>La frase tiene " . str_word_count($cad) . " palabras";
        }
    ?>
</body>
</html>