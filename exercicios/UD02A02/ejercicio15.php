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
        $numeroN = 50;
        $multiplos = 0;
        $i = 1;

        while($i <= $numeroN) {
            if($i % 5 == 0) {
                $multiplos++;
            }
            $i++;
        }
            echo "<p>Numero de múltiplos hasta $numeroN es $multiplos</p>";

    ?>
</body>
</html>