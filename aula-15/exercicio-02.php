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
					include "exercicio-02-script.php";
					echo "<h2>Testando funções externas!</h2>";
					ola();
					mostraValor(10);
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
