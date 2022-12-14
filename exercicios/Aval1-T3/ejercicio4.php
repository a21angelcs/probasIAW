<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Angel Caballero - Exercicio04</title>
	<link rel="stylesheet" type="text/css" href="../plantilla/plantilla.css">
</head>

<body>
	<header>
		<h1>MODULO IAW</h1>

	</header>

	<main>
		<div>
			<h2>Enunciado</h2>
			<p>Deseña	un	algoritmo	que	avalíe	a	puntuación	obtida	no	lanzamento	de	tres	dados en	base	a	cantidade	de	seis	obtidos,	de	acordo	ao	seguinte:</br>
            – Tres	6:	Ouro</br>
            – Dous	6:	Prata</br>
            – Un 6:	Bronce</br>
            – Ningún	6:	perdeu.</br>
            Para	simular	a	tirada	do	dado,	xera	o	número	utilizando	a	función	matemática	que	permite	
            obter	un	número	aleatorio.	Ter	en	conta	que	só	se	pode	obter	un	número	entre	1	e	6.</p>
		</div>

		<div>
		<h2>Resultado</h2>
		<p><?php
            $primero = rand(1, 6);
			$segundo = rand(1, 6);
			$tercero = rand(1, 6);
			if (($primero == 6) && ($segundo == 6) && ($tercero == 6)){
				echo "eres oro";
			}elseif ((($primero == 6) && ($segundo == 6)) || (($primero == 6) && ($tercero == 6)) || (($segundo == 6) && ($tercero == 6))){
				echo "eres plata";
			}elseif (($primero == 6) || ($segundo == 6) || ($tercero == 6)){
				echo "eres bronce";
			}else{
				echo "has perdido";
			}
        ?></p>
		</div>
	</main>



	<footer>
		<p class="principio">Angel Caballero Seijas </p>
		<p class="final"> 14 de Septiembre de 2022</p>
	</footer>

</body>

</html>