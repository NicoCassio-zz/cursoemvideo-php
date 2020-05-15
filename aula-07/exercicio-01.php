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
					$n1 = $_GET['a'];
					$n2 = $_GET['b'];
					echo "<h2>Valores: $n1 e $n2</h2>";
					$op = $_GET['op'];
					$r = $op == 'soma' ? $n1 + $n2 : $n1 - $n2;
					echo "O resultado da operação é $r";
				?>
			</section>
		</div>
	</body>
</html>
