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
    //array nota media
        $i=1;
        $suma=0;
        $array=[1,2,3,4,5,6,7,8,9];
        if(empty($array)){
            echo "No hay notas disponibles";
        }else{
            echo"<table>";
            foreach($array as $valor){
                echo "<tr>
                        <th>Nota" . $i++ . "</th>
                        <td>$valor</td>
                      </tr>";
                $suma += $valor;
            }
            $media=$suma / count($array);
            echo "<tr>
                        <th>MEDIA</th>
                        <td>" . round($media,2) . "</td>
                  </tr>";
            echo"</table>";
        }
    ?>
</body>
</html>