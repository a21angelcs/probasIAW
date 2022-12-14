<?php
$num1 = "H";
if(is_numeric($num1)){
    if ($num1 > 0) {
            echo "<p>El numero $num1 positivo </p>\n";
        } elseif ($num1 < 0){
            echo "<p>El numero $num1 es negativo </p>";
        } else{
            echo "<p>El numero $num1 es neutro </p>";
        }
    }else{
        echo "<p>NO ES UN NUMERO </p>";
    }
?>