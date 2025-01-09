<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<b><h3>Un programa, dados los grados centígrados actuales. Tras introducirlos, los pasará a grados Fahrenheit: </h3></b>";
    echo "<br>";

    $deg = 25;
    echo "Tenemos $deg Cº";
    echo "<br>";
    $fahr = ($deg*1.8)+32;
    echo "Los grados Fahrenheit son: $fahr ºF";

    ?>
</body>
</html>