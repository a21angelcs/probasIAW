<?php
    $num = 3;
    $cadea = "Ola";

    if(is_numeric($num)) {
        echo"<p>A variable num es numerica.</p>\n";
    } else {
        echo "<p>A variable num non é numerica</p>\n";
    }

    if(is_numeric($cadea)) {
        echo"<p>A variable cadea es numerica.</p>\n";
    } else {
        echo "<p>A variable cadea non é numerica</p>\n";
    }
?>