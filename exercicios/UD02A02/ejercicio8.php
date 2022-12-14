<?php
$consum =120;

if ($consum <= 100) {
    echo "<p>paga la cuenta con descuento del 10% que es: " . ($consum * 0.90) * 1.19 . "€</p>\n";
} else {
    echo "<p>paga la cuenta con descuento del 20% que es: " . ($consum * 0.80) * 1.19 . "€</p>\n";
}
