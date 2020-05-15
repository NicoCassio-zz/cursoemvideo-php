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
					$x = "abc";
					$$x = "def";
					echo "Conteúdo de 'x': $x";
					echo "<br />Conteúde de 'abc': $abc";
				?>
			</section>
		</div>
	</body>
</html>
