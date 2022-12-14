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
        $notas [0]=[1,2,3];
        $notas [1]=[1,2,3];
        $notas [2]=[1,2,3];
        $notas [3]=[1,2,3];
        $notas [4]=[1,2,3];
        $notas [5]=[1,2,3];
        $notas [6]=[1,2,3];
        $notas [7]=[1,2,3];
        $notas [8]=[1,2,3];
        $notas [9]=[1,2,3];
        /*foreach ($notas as $a => $notasA) {
            echo "El alumno " . $a . " tiene estas notas: ";
            echo "<ul>";
            foreach ($notasA as $modulo => $nota) {
                echo "<li>$modulo = $nota</li>";
            }
            echo "</ul>";
            echo "</br>";
        }*/
        for ($i=0;$i<count($notas);$i++){
            for ($j=0;$j<count($notas[$i]);$j++){
                echo $notas[$i][$j] . "";
            }
            echo "</br>";
        }
    ?>
</body>
</html>