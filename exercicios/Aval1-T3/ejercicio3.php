<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Angel Caballero - Exercicio03</title>
	<link rel="stylesheet" type="text/css" href="../plantilla/plantilla.css">
</head>

<body>
	<header>
		<h1>MODULO IAW</h1>

	</header>

	<main>
		<div>
			<h2>Enunciado</h2>
			<p>Unha empresa estableceu diferentes prezos para o seus produtos, segundo a súa calidade:</br>
            Crea	un	script	que	devolva	o	prezo	a	pagar	para	un	produto e	unha	calidade	dada.
            Facer	o	algoritmo	empregando	só	a	estrutura	switch.
            </p>
		</div>

		<div>
		<h2>Resultado</h2>
		<p><?php
                    $producto = 1;
                    $calidad = 3;

                    $solicitud = $producto.$calidad;
                    switch ($solicitud) {
                        case 11:
                            $precio = 5000;
                            break;
                        case 12:
                            $precio = 4500;
                            break;
                        case 13:
                            $precio = 4000;
                            break;
                        case 21:
                            $precio = 4500;
                            break;
                        case 22:
                            $precio = 4000;
                            break;
                        case 23:
                            $precio = 3500;
                            break;
                        case 31:
                            $precio = 4000;
                            break;
                        case 32:
                            $precio = 3500;  
                            break;
                        case 33:
                            $precio = 3000;
                            break;
                    }
                    echo "El precio es de $precio €";
                ?></p>
		</div>
	</main>



	<footer>
		<p class="principio">Angel Caballero Seijas </p>
		<p class="final"> 14 de Septiembre de 2022</p>
	</footer>

</body>

</html>