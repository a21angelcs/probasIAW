<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function imprimirCabeceira() {
            echo "<h1>Empresa Pepito</h1>";
            echo "<h3>Estamos ao seu servicio desde 1900</h3>";
        }
        echo "<h1>Páxina principal</h1>";
        imprimirCabeceira();
        echo "<hr/>";
        imprimirCabeceira();
        echo "<hr/>";
        echo "<hr/>";

        include 'operacionsMates.php';
        $op1 = 3;
        $op2 = 5;
        
        suma($op1, $op2);
        resta($op1, $op2);
        producto($op1, $op2);
        division($op1, $op2);
        echo "<hr/>";

        $operador = '-';
        $total = operacionMates($op1, $op2, $operador);
        echo "<p>Total de $op1 $operador $op2 = $total</p>\n";

        $operador = '+';
        $total = operacionMates($op1, $op2, $operador);
        echo "<p>Total de $op1 $operador $op2 = $total</p>\n";

        $operador = '*';
        $total = operacionMates($op1, $op2, $operador);
        echo "<p>Total de $op1 $operador $op2 = $total</p>\n";


        $total = operacionMates($op1, $op2);
        echo "<p>Total de $op1 , $op2 = $total</p>\n";
    ?>
</body>
</html>