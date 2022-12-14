
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php

            $num1 = 100;
            $num2 = 20;

            $num1 += $num2; /*si los ponemos así con += van uno de tras de otro y la variable num1 va cambiando */
            echo "<li>Suma: " .  $num1 . "</li>";

            $num1 -= $num2;
            echo "<li>Resta: " . $num1 . "</li>";

            $num1 /= $num2;
            echo "<li>División: " . $num1 . "</li>";

            $num1 *= $num2;
            echo "<li>Multi: " . $num1 . "</li>";

            $rdo = $num1 % $num2;
            echo "<li>Módulo: " . $rdo . "</li>"; /*Es el resto de la división*/

            $num1 = -55;

            echo "<li>Abs: " . abs($num1) . "</li>";
            echo "<li>Num1: " . $num1 . "</li>";

            echo "<li>Max: " . abs(max(-55, -3, -897, -1098, -345, -9, 4, 7, 1)) . "</p>";
            echo "<li>Max: " . max(abs(-55), abs(-3), abs(-897), ) . "</p>";
        ?>
    </ul>
</body>
</html>
