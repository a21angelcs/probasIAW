<?php
    function encherArray($numElem)
    {
        $array = [];
        for($i = 0; $i < $numElem; $i++) {
            $array[$i] = rand(1, 9);
        }
        return $array;
    }  

    function contarAparicion($array, $valor)
    {
        $cont = 0;
        foreach($array as $num) {
            if($num == $valor) {
                $cont++;
            }
        }
        return $cont;
    }

    $array = encherArray(10);
    print_r($array);
    $valorB = 4;
    echo "o numero de aparicions de 4: " . contarAparicion($array, $valorB);

?>