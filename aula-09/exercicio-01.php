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
					$idade = date("Y") - (isset($_GET['tNasc'])?$_GET['tNasc']:2020);
					echo "<h2>Idade: $idade</h2>";
					if($idade < 16) {
						$v = "não vota";
					} elseif($idade < 18 || $idade > 65) {
						$v = "voto opicional";
					} else {
						$v = "voto obrigatório";
					}
					echo "Votar: $v";
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-01-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
