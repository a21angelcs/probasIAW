<?php
    $mes = 6;

    switch ($mes) {
        case ($mes <= 3):
            echo"<p>Primer Trimestre</p>";
            break;
        case ($mes >= 3 && $mes < 6):
            echo"<p>Segundo Trimestre</p>";
            break;
        case ($mes >= 6 && $mes < 9):
            echo"<p>Tercer Trimestre</p>";
            break;
        case  ($mes >= 9 && $mes <= 12):
            echo"<p>Cuarto Trimestre</p>";
            break;
    }

    /*
    if ($mes <= 3) {
        echo"<p>Primer Trimestre</p>";
    } elseif ($mes >= 3 && $mes < 6) {
        echo"<p>Segundo Trimestre</p>";
    } elseif ($mes >= 6 && $mes < 9) {
        echo"<p>Tercer Trimestre</p>";
    } else {
        echo"<p>Cuarto Trimestre</p>";
    }
    */
?>