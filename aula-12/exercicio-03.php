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
					$i = 1;
					$n = isset($_GET['tNum'])?$_GET['tNum']:1;
					do {
						echo "$n x $i = ". ($i * $n). "<br />";
						$i++;
					}while($i <= 10);
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
