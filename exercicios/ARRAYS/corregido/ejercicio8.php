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
        $notas ["a1"]=["eie" =>1,"aso" =>2,"bd" =>3];
        $notas ["a2"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a3"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a4"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a5"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a6"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a7"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a8"]=["bd" =>1,"sad" =>2,"aso" =>3];
        $notas ["a9"]=["bd" =>1,"sad" =>2,"aso" =>3];
        foreach ($notas as $a => $notasA) {
            echo "El alumno " . $a . " tiene estas notas: ";
            echo "<ul>";
            foreach ($notasA as $modulo => $nota) {
                echo "<li>$modulo = $nota</li>";
            }
            echo "</ul>";
            echo "</br>";
        }
    ?>
</body>
</html>