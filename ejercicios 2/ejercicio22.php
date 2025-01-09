<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3><b>Calcula la longitud (2*PI*R) y el área de un círculo (PI*R2) a partir de un radio dado. </b></h3><br>";
        $radio=67;
        echo "Radio = $radio cm<bR>";
        $long = 2*3.14*$radio;
        echo "Longitud = $long cm<br>";
        $area=2.14*($radio^2);
        echo "Area = $area cm2";
    ?>
</body>
</html>