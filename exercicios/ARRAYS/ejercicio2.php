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
        function encherArray($numElem)
        {
            $array = [];
            for($i = 0; $i < $numElem; $i++) {
                $array[$i] = rand(1, 9);
            }
            return $array;
        }  
        $array = encherArray(40);
        $cont = 0;
        foreach ($array as $valor) {
            echo $valor . " ";
            $cont++;
            if ($cont == 10) {
                echo "</br>";
                $cont = 0;
            }
        }
    ?>
</body>
</html>