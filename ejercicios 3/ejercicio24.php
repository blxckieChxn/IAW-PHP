<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   
   <?php
      
        
            for($i=0; $i<7;$i++){
                switch($i){
                    case 1:
                        echo "Putos lunes <br>";
                        break;
                    case 2:
                        echo "Putos martes<br>";
                        break;
                    case 3:
                        echo "Putos miercoles<br>";
                        break;
                    case 4:
                        echo "El jueves está decente<br>";
                        //NOTA: El enunciado dice que quite un break, ya se ve lo que pasa en el resultado
                    case 5:
                        echo "PERO EL VIERNES ESTA MEJORRRRRRR!!!!<br>";
                        break;
                    case 6:
                        echo "Benditos sabados<br>";
                        break;
                    case 7:
                        echo "Domingo de resaca<br>";
                        break;
                
                }
            }
    
    ?>
</body>
</html>