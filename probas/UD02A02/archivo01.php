<?php
 //numero random par o impar 
   $num = rand(1,10);
    echo "<p>Num: $num</p>\n";
   
    if (($num % 2) == 0) {
        echo "<p>Te tocó numero par</p>\n";
    } else {
        echo "<p>No es par :( </p>";
    }
?>
    /*
    echo (($num % 2) == 0)? "<p>Te tocó numero par</p>\n" : "<p>No es par :( </p>";*/
    
