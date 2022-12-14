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
        $notasPepito = ["EIE" => 7, "SAD" => 9, "ASO" =>5, "SRI" =>8, "IAW" =>9];
        $suma = 0;
        $i = 0;
        //$totalNotas = count ($notasPepito);

        foreach($notasPepito as $valor) {
            $suma += $valor;
            $i++;
        }


        $media = $suma / $i;

        echo "Media de Pepito: $media<br/>";

        foreach($notasPepito as $clave => $valor) {
            echo "La nota de $clave es: $valor.<br/>";
        }
        

    ?>
</body>
</html>