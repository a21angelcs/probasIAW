<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $DNI = "12345678 Q";
        $n1 = 5;
        $n2 = 8;
        $n3 = 5;
        $n4 = 4;
        $nMedia = ($n1 + $n2 + $n3 + $n4) / 4;
        echo "<p>La nota media es de: " . $nMedia . " y el chaval tiene el dni: " . $DNI . "</p>";
    ?>
</body>
</html>