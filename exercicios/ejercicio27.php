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
    $pi = 3.1415;
    $r = 3;
    $h = 5;
    $potr = pow($r,2);
    $area = 2 * $pi * $r * ($r + $h);
    $volumen = $pi * $potr * $h;
    echo "<p>El área del cilindro es:" . $area . "metros cuadrados y el volumen es: " . $volumen . "metros cúbicos.</p>"
    ?>
</body>
</html>