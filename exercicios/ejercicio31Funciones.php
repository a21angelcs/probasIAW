<?php
    define("IVA", "21");
    
    function suma($numero1, $numero2)
    {
    $total = $numero1 + $numero2;
    echo "<p>Suma de $numero1 + $numero2 = $total</p>\n";
    }

    function precioFinal($precio) 
    {
        return ($precio+($precio*IVA/100));
    }
?>