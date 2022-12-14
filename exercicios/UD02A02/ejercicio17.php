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
        $num=1750;
        $rdo=0;
        $coc=$num;
        while($coc !=0) {
            $dig=$coc %10;
            $coc = floor($coc / 10);
            $rdo=($rdo * 10) + $dig;
        }
        echo "<p>El inverso del número $num es $rdo</p>"
    ?>
</body>
</html>