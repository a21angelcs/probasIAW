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

            $rangoI = 43;
            $rangoS = 56;
            $numero = $rangoI;
            $cont = 0;

        /* alternativa 1
            if($rangoI >= $rangoS) {
                while($numero <= $rangoS) {
                    if($numero % 2 == 0) {
                        $cont++;
                    }
                    $numero++;
                }
                echo "<p>El numero de pares entre $rangoI y $rangoS es $cont</p>";
            } else {
                echo "<p>El rango es incorrecto</p>";
            }

            alternativa 2
        */
            if ($rangoI > $rangoS) {
                $numero = $rangoS;
                $rangoS = $rangoI;
                $rangoI = $numero;
            }
                while($numero <= $rangoS) {
                    if($numero % 2 == 0) {
                        $cont++;
                    }
                    $numero++;
                }
                    echo "<p>El numero de pares entre $rangoI y $rangoS es $cont</p>";

        
    ?>
</body>
</html>