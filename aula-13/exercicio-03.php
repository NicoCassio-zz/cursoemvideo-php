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
					$n = isset($_GET['tNum'])?$_GET['tNum']:0;
					$p = 0;
					echo "<h2>Analisando: $n</h2>";
					echo "Divisores: ";
					for($i = 1; $i < $n; $i++) {
						if($n % $i == 0) {
							echo " $i";
							$p++;
						}
					}
					echo "<br />Total de divisores: $p<br />";
					if($p == 1) {
						echo "$n é primo";
					} else {
						echo "$n não é primo";
					}
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
