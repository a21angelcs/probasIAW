<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Angel Caballero - Exercicio01</title>
	<link rel="stylesheet" type="text/css" href="../plantilla/plantilla.css">
</head>

<body>
	<header>
		<h1>MODULO IAW</h1>

	</header>

	<main>
		<div>
			<h2>Enunciado</h2>
			<p>Dada	a hora, minuto e segundo, atopar a hora	do	seguinte segundo.</p>
		</div>

		<div>
		<h2>Resultado</h2>
		<p><?php
                $hora = 23;
                $min = 59;
                $seg = 59;

                if ($seg == 59) {
                    $seg = 0;
                    if ($min == 59) {
                        $min = 0;
                        $hora++;
                        if($hora == 24){
                            $hora = 0;
                        }
                    } else {
                        $min++;
                    }
                } else {
                    $seg++;
                }
                if ($seg < 10) {
                    $seg = "0" . $seg;
                }
                if ($min < 10) {
                    $min = "0" . $min;
                }
                echo "La hora del siguiente segundo es: $hora : $min : $seg";
            ?></p>
		</div>
	</main>



	<footer>
		<p class="principio">Angel Caballero Seijas </p>
		<p class="final"> 14 de Septiembre de 2022</p>
	</footer>

</body>

</html>