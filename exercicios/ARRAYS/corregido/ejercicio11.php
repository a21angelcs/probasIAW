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
        $fila [] = [];  
        for ($i = 0; $i < 6; $i++) {
            for($j = 0; $j < 4; $j++){
                $fila[$i][$j] = 3 * ($j+1);
                echo"|";
                echo $fila[$i][$j];
                echo " | ";
            }
            echo "</br>";
            echo "</br>";
        }
    ?>
</body>
</html>