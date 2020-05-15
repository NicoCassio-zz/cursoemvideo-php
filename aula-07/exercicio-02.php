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
					$a = 3;
					$b = '3';
					$r = $a === $b ? "SIM" : "NÃO";
					echo "As variáveis 'a' e 'b' são idênticas? $r";
				?>
			</section>
		</div>
	</body>
</html>
