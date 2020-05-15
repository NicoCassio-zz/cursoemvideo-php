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
					$n1 = $_GET['n1'];
					$n2 = $_GET['n2'];
					$m = ($n1 + $n2) / 2;
					echo "A média é ". number_format($m, 1). " e o aluno foi ". ($m < 6 ? "reprovado" : "aprovado");
				?>
			</section>
		</div>
	</body>
</html>
