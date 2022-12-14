<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>plantilla IAW</title>
	<link rel="stylesheet" type="text/css" href="plantilla/plantilla.css">
</head>

<body>
	<header>
		<h1>O	servidor	funciona	correctamente</h1>

	</header>

	<main>
		<div>
			<h2>Enunciado</h2>
			<p>: a	partir	do	script	anterior	substitúe	o	texto	mostrado	en	HTML	por	unha	sentenza	
                echo	de	php	que	mostre	o	texto	“O	servidor	web	interpreta	correctamente	os	scripts	en	php”.	
                Na	páxina	mostrada	no	navegador	consulta	o	código	fonte	e	responde	ás	seguintes	cuestións:</p>
                <p> – Aparece	código	en	PHP? No</p>
                <p> – Que	tipo	de	código	aparece? HTML</p>
                <p> – Cal	é	a	razón	de	que	apareza	a páxina escrita neste código?</p>
		</div>

		<div>
		<h2>Resultado</h2>
		<?php
			echo "<p>O servidor funciona correctamente</p>\n";
		?>
		</div>
	</main>

	<footer>
		<p class="principio">Angel Caballero Seijas </p>
		<p class="final"> 14 de Septiembre de 2022</p>
	</footer>

</body>

</html>