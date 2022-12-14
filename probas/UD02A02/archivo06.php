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
        $num = rand(1,10);

        switch($num) {
            case 1:
                $texto = "uno";
                break;
            case 2:
                $texto = "dos";
                break;
            case 3:
                $texto = "tres";
                break;
            case 4:
                $texto = "cuatro";
                break;
            case 5:
                $texto = "cinco";
                break;
            case 6:
                $texto = "seis";
                break;
            case 7:
                $texto = "siete";
                break;
            case 8:
                $texto = "ocho";
                break;  
            case 9:
                $texto = "nueve";
                break;
            case 10:
                $texto = "diez";
                break;  
        }
        echo "<p>O numero $num ten como texto: $texto</p>\n"
    ?>
</body>
</html>