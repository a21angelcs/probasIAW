<?php
    $cliente = "x";
    $pago = "p";
    $con = $cliente.$pago;
    $precio = 100;
    switch ($con) {
        case "xc":
            echo"<p>15% de descuento que queda en:" . ($precio*0.85) . "</p>";
            break;
        case "xp":
            echo"<p>10% de recargo que queda en:" . ($precio*0.90) . "</p>";
            break;
        case "ac":
            echo"<p>20% de descuento que queda en:" . ($precio*0.80) . "</p>";
            break;
        case  "ap":
            echo"<p>5% de descuento que queda en:" . ($precio*0.95) . "</p>";
            break;
    }


    if ($con == "xc") {
        echo"<p>15% de descuento que queda en:" . ($precio*0.85) . "</p>";
    } elseif ($con == "xp") {
        echo"<p>10% de recargo que queda en:" . ($precio*0.90) . "</p>";
    } elseif ($con == "ac") {
        echo"<p>20% de descuento que queda en:" . ($precio*0.80) . "</p>";
    } else {
        echo"<p>5% de descuento que queda en:" . ($precio*0.95) . "</p>";
    }
    
    
?>