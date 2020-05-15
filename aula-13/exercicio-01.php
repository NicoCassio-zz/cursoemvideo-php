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
					$i;
					for($i = 1; $i <= 10; $i++) {
						echo "$i.. ";
					}
					echo "<br />";
					for($i = 10; $i >= 1; $i--) {
						echo "$i.. ";
					}
					echo "<br />";
					for($i = 0; $i <= 50; $i+=5) {
						echo "$i.. ";
					}
					echo "<br />";
					for($i = 20; $i >= 0; $i -= 2) {
						echo "$i.. ";
					}
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
