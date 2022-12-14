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
        function suma($operando1, $operando2)
        {
            $total = $operando1 + $operando2;
            echo "<p>Suma de $operando1 + $operando2 = $total</p>\n";
        }

        function resta($operando1, $operando2)
        {
            $total = $operando1 - $operando2;
            echo "<p>Resta de $operando1 - $operando2 = $total</p>\n";
        }

        function producto($operando1, $operando2)
        {
            $total = $operando1 * $operando2;
            echo "<p>Multiplicacion de $operando1 * $operando2 = $total</p>\n";
        }

        function division($operando1, $operando2)
        {
            $total = $operando1 / $operando2;
            echo "<p>Division de $operando1 / $operando2 = $total</p>\n";
        }
        
        function operacionMates($operando1, $operando2, $operador = '*')
        {
            switch($operador) {
                case '+';
                    $total = $operando1 + $operando2;
                    break;
                case '-';
                    $total = $operando1 - $operando2;
                    break;
                case '/';
                    $total = $operando1 / $operando2;
                    break;
                case '*';
                    $total = $operando1 * $operando2;
                    break;
            }
            return $total;
        }
    ?>
</body>
</html>