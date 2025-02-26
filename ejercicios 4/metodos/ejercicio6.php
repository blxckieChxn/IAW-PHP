<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3><b>Los empleados de una fábrica trabajan en dos turnos, Diurno y Nocturno. Se desea
    calcular el jornal diario de acuerdo a con las siguientes reglas:</b></h3><br>

    <h5>La tarifa de las horas diurnas es de 10 €</h5>
    <h5>La tarifa de las horas nocturnas es de 13,5 €</h5>
    <h5>En caso de ser festivo, la tarifa se incrementa en un 10% en caso de turno diurno
    y en un 15% para el nocturno.</h5><hr>

    <form action="ejercicio6.php" method="post">
        <div class="inicio">
            <input type="number" id="num1" name="num1" placeholder="Numero de horas" >
        </div>

        <select id="turno" name="turno">
                <option value="diu">Diurno</option>
                <option value="noc">Nocturno</option>
            </select>

        <select id="op" name="op">
                <option value="noFest">No festivo</option>
                <option value="fest">Festivo</option>
            </select>

        <input type="submit" value="iniciar">
    </form>
   <?php

        function calcJornal($fest, $horas, $turn){

            $res=0; //variable resultado
            $jDiu=$horas*10;
            $jNoc=$horas*13.5;
            switch($fest){
                case"fest":
                    
                    if($turn=="diu"){
                        $jDiu += $jDiu*0.1;
                        $res=$jDiu;

                    } else {
                        $jNoc += $jNoc*0.15;
                        $res=$jNoc;
                    }

                    break;
                case"noFest":
                    if($turn=="diu"){
                        $res=$jDiu;
                    } else {    
                        $res=$jNoc;
                    }
                    break;
            }

            return $res;
        }
    
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $fest = $_POST['op'];
            $horas = $_POST['num1'];
            $turn = $_POST['turno'];

            echo "El total es: " . calcJornal($fest, $horas, $turn) . " €";
        }
    ?>
</body>
</html>