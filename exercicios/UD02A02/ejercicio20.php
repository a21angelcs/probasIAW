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
        $rangoI=20;
        $rangoS=40;
        $valor=4;
        $cont=0;
        for( ; $rangoI <= $rangoS; $rangoI++) {
            if ($rangoI % $valor == 0){
                $cont++;
            }
        }
        echo"El número de múltiplos de $valor es " . $cont;
        ?>
</body>
</html>