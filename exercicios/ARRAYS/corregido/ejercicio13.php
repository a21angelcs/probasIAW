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
        for ($i = 0; $i < 3; $i++){
            for ($j = 0; $j < 5; $j++){
                $array[$i][$j] = $i + $j;
            }
        }
        $matriz1 = array(
            array(2,0,1,4,5),
            array(2,0,1,4,5),
            array(2,0,1,4,5)
        );
        foreach($matriz1 as $posFila => $fila){
            foreach($fila as $posCol => $valor){
                $trasposta [$posCol][$posFila] = $valor;
            }
        }
        print_r($trasposta);

        function eCadrada($array){

        }



        /*function crearMatrizIdentidad($tan){
            for ($i = 0; $i < $tan; $i++){
                for ($j = 0; $j < $tan; $j++){
                    if ($i == $j){
                        $array[$i][$j] = 1;
                    }else{
                        $array[$i][$j] = 0;
                    }
                }
            }
            return $array;
        }*/
       /* function crearMatrizDiagonal($tan){
            if (is_integer($tan)&&($tan > 0)){
                for ($i = 0; $i < $tan; $i++){
                    for($j = 0; $j < $tan; $j++){
                        if ($i == $j){
                            $array[$i][$j] = rand(1,9);
                        }else{
                            $array[$i][$j] = 0;
                        }
                    }
                }
            }
            return $array;
        }*/
        /*function obtenerTraspuesta($array){
            $traspuesta = null;
            if (is_array($array)){
                foreach ($matriz1 as $posFila => $fila){
                    foreach($fila as $posCol => $valor){
                        $traspuesta[$posCol][$posFila] = $valor;
                    }
                }
            }
            return $traspuesta;
        }*/

        function eSimetrica($array){
            if (is_array($array)){
                $traspuesta = obtenerTraspuesta($array);
                foreach($array as $posFila => $fila){
                    foreach($fila as $posCol => $valor){
                        if ($array[$posFila][$posCol] == $traspuesta[$posFila][$posCol]){
                            $coinciden = false;
                            break 2;
                        } 
                    }
                }
                $coinciden = true;
                $posFila = 0;
                while($coinciden) {
                    $posCol = 0;
                    while($coinciden && ($posCol < count($array[$posFila]))){
                        if ($array[$posFila][$posCol] != $traspuesta[$posFila][$posCol]){
                            $coinciden = false;
                        }
                        $posCol++;
                    } 
                    $posFila++;
                }
            }
            return $coinciden;
        }
        $matriz1=array(
            array(0,0),
            array(0,0)
        );
        echo eSimetrica($matriz1);
        print_r(crearMatrizIdentidad(5))
    ?>
</body>
</html>