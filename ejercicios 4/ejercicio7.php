<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Dada una cadena, convertirla a mayúsculas o a minúsculas</b></h3><br><br>

    <form action="ejercicio7.php" method="post">
        <div class="inicio">
            <input type="text" id="cadena" name="cadena" placeholder="Escribe algo" >
        </div>

        <select id="op" name="op">
                <option value="mayus">Mayusculas</option>
                <option value="minus">Minusculas</option>
            </select>

        <input type="submit" value="iniciar">
    </form>
   <?php
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $cad = $_POST['cadena'];
            $op = $_POST['op'];
            
            switch($op){
                case("minus"):
                    $min = strtolower($cad);
                    echo "<br>Resultado: $min";
                    break;
                
                case("mayus"):
                    $may= strtoupper($cad);
                    echo "<br>Resultado: $may";
                    break;
            }

        }
    ?>
</body>
</html>