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
        $si = 100;
        $no = 23;
        $psi = $si *100 / ($si + $no);
            echo "<p>sí:" . $psi . "%</p>";
        $pno = $no *100 / ($si + $no);
            echo "<p>no:" . $pno . "%</p>";
    ?>
</body>
</html>