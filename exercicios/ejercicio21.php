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
        $base =2;
        $exponente = 3;
        $potencia = pow($base, $exponente);
        echo "<p>la potencia de " . $base . " elevado a " . $exponente . " es " . $potencia ."</p>";
    ?>
</body>
</html>