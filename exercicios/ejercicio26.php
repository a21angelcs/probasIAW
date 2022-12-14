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
    $pie = 5.6;
    $libra = 150;
    $cm = 30.48 * $pie;
    $kg = 0.453593 * $libra;
    $m = $cm / 100;
    $potencia = pow($m ,2);
    $IMC = $kg / $potencia;
        echo "<p> Pesas: " . $kg . " kg, mides: " . $cm . " cm, y tu IMC es: " , $IMC , "</p>"
    ?>
</body>
</html>