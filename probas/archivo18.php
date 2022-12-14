<?php
    $cadea = "5 puntos";
    echo "Tipo:" . gettype($cadea);
    if (settype($cadea, 'int')){
        echo "<p>Realizouse o cambio de tipo</p>";
    } else {
        echo "<p>non se realizou o cambio de tipo</p>";
    }

    echo "Valor despues del cambio:" . $cadea;
    unset($cadea);

?>