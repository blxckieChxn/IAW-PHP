<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Generar una cadena aleatoria.</b></h3><br><br>

   <?php
            
        $rands=array();
        $randLength = random_int(1,100000);
        for($i=0; $i<$randLength; $i++){
            array_push($rands, random_int(1, 256));
        }
        
        for($i=0; $i<$randLength; $i++){
            $rands[$i]=chr($rands[$i]);
        }

        for($i=0; $i<$randLength; $i++){
            echo $rands[$i];
        }

            
        
    ?>
</body>
</html>