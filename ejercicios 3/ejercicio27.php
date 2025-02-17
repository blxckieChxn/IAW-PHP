<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio27.php" method="post">
    <h3><b>Elaborar un programa que permita calcular diferentes tipos de áreas: trapecio, triángulo,
        cuadrado, rectángulo o círculo, en caso contrario indicar que no es una figura geométrica válida. Se le
        indicará al programa el área a calcular.</b></h3><br><br>
        <!-- ======================================TRAPECIO======================================================================= -->
        <div class = "trapecio">
            <div class="inicio">
                Base grande: <input type="number" id="B" name="B" required><br>
            </div>
            <div class="inicio">
                Base pequeña: <input type="number" id="b" name="b" required><br>
            </div>
            <div class="inicio">
                Altura: <input type="number" id="hTrap" name="hTrap" required><br>
            </div>
        </div>

        <!-- ======================================TRIANGULO===================================================================== -->

        <div class = "triangulo">
            <div class="inicio">
                Base: <input type="number" id="bTri" name="bTri" required><br>
            </div>
            <div class="inicio">
                Altura: <input type="number" id="hTri" name="hTri" required><br>
            </div>
        </div>

        <!-- ======================================CUADRADO===================================================================== -->

        <div class = "cuadrado">
            <div class="inicio">
                Lado: <input type="number" id="l" name="l" required><br>
            </div>
        </div>

        <!-- ======================================RECTANGULO=================================================================== -->

        <div class = "rectangulo">
            <div class="inicio">
                Base: <input type="number" id="bRec" name="bRec" required><br>
            </div>
            <div class="inicio">
                Altura: <input type="number" id="hRec" name="hRec" required><br>
            </div>
        </div>
        
        <!-- ======================================CIRCULO======================================================================= -->


        <div class = "circulo">
            <div class="inicio">
                Radio: <input type="number" id="r" name="r" required>
            </div>
        </div>

        <label for="op"> Selecciona una peracion: </label>
            <select id="fig" name="fig">
                <option value="trapecio">Trapecio</option>
                <option value="triangulo">Triangulo</option>
                <option value="cuadrado">Cuadrado</option>
                <option value="rectangulo">Rectangulo</option>
                <option value="circulo">Circulo</option>
            </select>
       

        <input type="submit" value="iniciar">
    </form>
    <script>
            $(document).ready(function(){
            
            $(function() {
        var pintadoObra = false;
        var pintadoReforma = false;
        $("#obra").click(function() {
        if (!pintadoObra){
            $(".obra").removeClass("collapse");
            pintadoObra = true;
        } else {
            $(".obra").addClass("collapse");
            pintadoObra = false;
        }
    })

    $("#reforma").click(function() {
        if (!pintadoObra){
            $(".reforma").removeClass("collapse");
            pintadoObra = true;
        } else {
            $(".reforma").addClass("collapse");
            pintadoObra = false;
        }
    })

    });

    });

    //iniciar ocultos
    document.getElementById("divObra").style.display = "none";
    document.getElementById("divReforma").style.display = "none";


    //cambiar estado mostrar/ocultar
    function functionShowObra() {
        var x = document.getElementById("divObra");
        var xForm = document.getElementById("formObra"); 
        
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        xForm.reset(); 
        }
    } 
    //cambiar estado mostrar/ocultar
    function functionShowReforma() {
        var x = document.getElementById("divReforma");
        var xForm = document.getElementById("formReforma"); 
        
        if (x.style.display === "none") {
        x.style.display = "block";
        } else {
        x.style.display = "none";
        xForm.reset(); 
        }
    } 
    </script>
   
   <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //TODO javascript para ocultar formularios
            $num1 = $_POST["num1"];

            switch($_POST["fig"]){
                case("trap"):
                    $a = ((b+B)/2)*h;
                    break;
                case("tri"):
                    echo "El resultado de la operación es: $num1 - $num2= " . $num1-$num2;
                    break;
                case("cuad"):
                    echo "El resultado de la operación es: $num1 x $num2= " . $num1*$num2;
                    break;
                case("rect"):
                    echo "El resultado de la operación es: $num1 / $num2= " . $num1/$num2;
                    break;
                case("circ"):
                    echo "El resultado de la operación es: $num1 / $num2= " . $num1/$num2;
                    break;
            }
           
        }
    ?>
</body>
</html>