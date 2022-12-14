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
        function llenarArray($numElem)
        {
            $array=[];
            for($i=0;$i<$numElem;$i++){
                $array[$i]=rand(0,9);
            }
            return $array;
        }
        
        function contarApar($array,$valor){
            $cont=0;
            foreach($array as $num){
                if($num == $valor){
                    $cont++;
                }
            }
            return $cont;
        }
        $array=llenarArray(10);
        print_r($array);
        $valorB=4;
        echo"O numero de aparaciones de $valorB " . contarApar($array,$valorB);

    ?>
</body>
</html>