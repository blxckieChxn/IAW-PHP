<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<b><h3>Realiza un programa similar al anterior, pero con Kilobytes, es decir, dados unos kilobytes, los
pasarás a megabytes y terabytes. </h3></b>";
    echo "<br>";

    $kb = 437567345.7865;
    echo "Tenemos $kb kilobytes, que son -> ";
    $mb = $kb /1024;
    echo " $mb megabytes, que son ->";
    $tb=$mb/(1024*1024);
    echo "$tb terabytes.";
    ?>
</body>
</html>