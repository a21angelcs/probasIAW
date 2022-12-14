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
        $valor = 100;
        $IVA = ($valor * 0.21);
        $prezoVent = $valor + ($valor * 0.21);
        echo "<p>El IVA de un producto que vale: " . $valor . " euros es " . $IVA . " euros, y el precio de venta es: " . $prezoVent . " euros</p>";
    ?>
</body>
</html>