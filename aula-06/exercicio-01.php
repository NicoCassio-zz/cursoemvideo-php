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
					$p = $_GET["p"];
					echo "Preço: R$", number_format($p, 2, ',', '.');
					$p *= 0.9;
					echo "<br />Preço com desconto: R$". number_format($p, 2, ',', '.');
				?>
			</section>
		</div>
	</body>
</html>
