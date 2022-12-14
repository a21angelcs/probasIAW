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
        /*$valores=array();
        $valores1=array();
        $valores2=array();
        $num_max=10;
        for($i=0;$i<$num_max;$i++){
            $aleatorio=rand(1,10);
            array_push($valores,$aleatorio);
        }
        echo"</br>";
        print_r($valores);
        for($i=0;$i<$num_max;$i++){
            $aleatorio=rand(1,10);
            array_push($valores1,$aleatorio);
        }
        echo"</br>";
        print_r($valores1);
        for($i=0;$i<$num_max;$i++){
            $aleatorio=rand(1,10);
            array_push($valores2,$aleatorio);
        }
        echo"</br>";
        print_r($valores2);*/
        function encherArray($numElem)
        {
            $array=[];
            for($i=0;$i<$numElem;$i++){
                $array[$i]=rand(0,9);
            }
            return $array;
        }
        $cont=0;
        $array=encherArray(40);
        foreach($array as $valor){
            echo $valor . "";
            $cont++;
            if($cont == 10){
                echo "</br>";
                $cont=0;
            }
        }
    ?>
</body>
</html>