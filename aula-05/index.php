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
					$n1 = $_GET["a"];
					$n2 = $_GET["b"];
					$s = $n1 + $n2;
					$m = ($s) / 2;
					echo "A soma entre $n1 e $n2 é igual a $s";
					echo "<br /><br />OPERAÇÕES EM GERAL";
					echo "<br />Soma: ". ($n1 + $n2);
					echo "<br />Subtração: ". ($n1 - $n2);
					echo "<br />Multiplicação: ". ($n1 * $n2);
					echo "<br />Divisão: ". ($n1 / $n2);
					echo "<br />Módulo: ". ($n1 % $n2);
					echo "<br />Média: $m";
				?>
			</section>
		</div>
	</body>
</html>
