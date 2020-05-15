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
					function soma() {
						$n = func_get_args();
						$t = func_num_args();
						for($i = 0; $i < $t; $i++) {
							$s += $n[$i];
						}
						return $s;
					}
					echo "Soma entre 4, 4, e 4 = ". soma(4, 4, 4);
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
