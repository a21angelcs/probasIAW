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
    $numero = 51;
    $contPares = 0;
    $contImpares =0;
        for ($i = 1; $i <= $numero; $i++) {
            if ($i % 2 == 0) {
                $contPares++;
            } else {
                $contImpares++;
            }
        }
    ?>
    <ul>
        <li>Nº de pares: <?php echo $contPares?></li>
        <li>Nº de impares: <?=  $contImpares?></li>
    </ul>
</body>
</html>