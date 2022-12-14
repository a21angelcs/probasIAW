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
        $v=[3,4,5];
        $u=[6,3,2];
        $contv=count($v);
        $contu=count($u);
            if($contv==$contu){
                for($i=0;$i<$contv;$i++){
                    $suma[$i]=$v[$i]+$u[$i];
                }
            }else{
                echo"No se suman";
            }
            print_r($suma);
        
        /* NO VA
        
        $v=["x"=>3,"y"=>4,"z"=>5];
        $u=["x"=>6,"y"=>4,"z"=>1];
        $contv=count($v);
        $contu=count($u);
        $array=[];
        function sumarvectores($array){
            
            for($i=0;$i<$contv;$i++){
                $array[$i]=$v[$i]+$u[$i];
                return $array;
            }
        }
        echo sumarvectores($array);
*/
        /*FORMA CUTRE
        return $array;
        if($contv==$contu){
        $sumax=$v["x"]+$u["x"];
        $sumay=$v["y"]+$u["y"];
        $sumaz=$v["z"]+$u["z"];
        echo "<p>El resultado de la suma de los vectores es (" . $sumax . "," . $sumay . "," . $sumaz . ")</p>";
        }else{
            echo"<p>Los vectores tienen distinta dimensión y por lo tanto no se pueden sumar</p>";
        }*/

       
    ?>
</body>
</html>