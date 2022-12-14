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
        $notasPepito = [7, 9, 5, 8, 9, 4, 10, 5];
        $total = count ($notasPepito);
        $sum = 0;
        for ($i = 0; $i<$total; $i++){
            $sum += $notasPepito [$i];
        }
        $media = $sum / $total;
        echo "$media";
        
        echo "<p>Pepito tiene un $notasPepito[0] en EIE</p>\n";
        echo "<p>Pepito tiene un $notasPepito[4] en IAW</p>\n";
        

    ?>
</body>
</html>