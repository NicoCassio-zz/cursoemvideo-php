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
					$a = 3;
					$b = &$a;
					$b += 5;
					echo "A variável 'a' vale $a";
					echo "<br />A variável 'b' vale $b";
				?>
			</section>
		</div>
	</body>
</html>
