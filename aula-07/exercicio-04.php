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
					$ano = $_GET['a'];
					$idade = 2020 - $ano;
					echo "Idade: $idade";
					$v = ($idade >= 18) && ($idade < 65) ? "obrigatório" : "não obrigatório";
					echo "<br />Seu voto é $v";
				?>
			</section>
		</div>
	</body>
</html>
