<?php

    function maiorPoboacion($array)
    {
        $maior = 0;
        $ciudad = "";
        if (is_array($array) && !empty($array)) {
            foreach($array as $clave => $valor) {
                if ($valor > $maior) {
                    $maior = $valor;
                    $ciudad = $clave;
                }
            }
        }

        return $ciudad;
    }

    $ciudades = ["Madrid" => 3, "Barcelona" => 2345, "Vigo" => 3234];
    maiorPoboacion(5);
    $intoo = 5;
    echo "A cidade con mais habitantes é:" . maiorPoboacion($intoo);








    /*
    $ciudad = ["Madrid" => 3, "Barcelona" => 2345, "Vigo" => 3234];
    $ciudad_max = max($ciudad);

    foreach($ciudad as $clave => $valor) {
        echo "La ciudad $clave tiene $valor habitantes.<br/>";
    }

    echo "<hr/>";

    foreach ($ciudad as $indice=>$valores) {
        if ($valores == $ciudad_max) {
            $nombre=$indice;  
        }
    }
    echo "la ciudad con mas habitantes es $nombre y tiene $ciudad_max habitantes. <br/>";
    */
   
?>