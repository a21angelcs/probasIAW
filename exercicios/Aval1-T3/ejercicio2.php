<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Angel Caballero - Exercicio02</title>
	<link rel="stylesheet" type="text/css" href="../plantilla/plantilla.css">
</head>

<body>
	<header>
		<h1>MODULO IAW</h1>

	</header>

	<main>
		<div>
			<h2>Enunciado</h2>
			<p>Dada un día e o número de mes, devolver a estación do ano de acordo á seguinte táboa:</p>
		</div>

		<div>
		<h2>Resultado</h2>
		<p><?php
                $dia = 23;
                $mes = 2;

                $fecha = $mes * 100 + $dia;

                if (($fecha > 1220 && $fecha < 1232) || ($fecha < 321)) {
                    $estacion = "Inverno";
                }
                if ($fecha > 320 && $fecha < 622) {
                    $estacion = "Primavera";
                }
                if ($fecha > 621 && $fecha < 923) {
                    $estacion = "Verán";
                }
                if ($fecha > 922 && $fecha < 1221) {
                    $estacion = "Outono";
                }

                echo "A estación do ano é " . $estacion;
            ?></p>
		</div>
	</main>



	<footer>
		<p class="principio">Angel Caballero Seijas </p>
		<p class="final"> 14 de Septiembre de 2022</p>
	</footer>

</body>

</html>