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
					$v = $_GET['tVal'];
					echo "<h2>Valor: $v</h2>";
					echo "Raiz de $v: ". number_format(sqrt($v), 2);
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-01-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
