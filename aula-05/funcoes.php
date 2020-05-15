<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Aprendendo PHP</title>
		<link rel="stylesheet" href="../_css/estilo.css" />
	</head>
	<body>
		<div id="interface">
			<header id="cabecalho">
				<h1>Aprendendo novidades em PHP</h1>
			</header>
			<section id="corpo">
				<?php
					$n1 = $_GET['x'];
					$n2 = $_GET['y'];
					echo "<h2>Valores recebidos: $n1 e $n2</h2>";
					echo "|$n2| = ". abs($n2);
					echo "<br />$n1<sup>$n2</sup> = ". pow($n1, $n2);
					echo "<br /> Raiz de $n1 = ". sqrt($n1);
					echo "<br />$n2 arredondaddo = ". round($n2);
					echo "<br /> Inteiro de $n2 = ". intval($n2);
					echo "<br /> Moeda: R$". number_format($n1, 2, ',', '.');
				?>
			</section>
		</div>
	</body>
</html>
