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
        $var = false;
        $num1 = 37;
        $num2 = 37;
        echo "<p>" .  (($num1 === $num2)?($num1 + $num2):($num1 - $num2)) . "</p>";
    ?>

</body>
</html>
