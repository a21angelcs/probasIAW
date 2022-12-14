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
        $num = "12345";
        $metros = (integer) ($num / 1000);
        $resto = $num % 1000;
        $decim = (integer) ($resto / 100);
        $resto = $resto % 100;
        $centim = (integer) ($resto / 10);
        $milim = $resto % 10;
            echo "$num milimetros corresponde a $metros metros <br/>";
            echo "$num milimetros corresponde a $decim decimetros <br/>";
            echo "$num milimetros corresponde a $centim centimetros <br/>";
            echo "$num milimetros corresponde a $milim milimetros <br/>";

    ?>
</body>
</html>