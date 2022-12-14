<?php
$num1 = 1;
$num2 = 1;
$num3 = 2;

if ($num1 > $num2 && $num1 > $num3) {
    echo "<p>el numero $num1 es el mayor</p>\n";
}

if ($num2 > $num1 && $num2 > $num3) {
    echo "<p>el numero $num2 es el mayor</p>\n";
}

if ($num3 > $num2 && $num3 > $num1) {
    echo "<p>el numero $num3 es el mayor</p>\n";
}