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
					$n1 = isset($_GET['tN1'])?$_GET['tN1']:0;
					$n2 = isset($_GET['tN2'])?$_GET['tN2']:0;
					$m = ($n1 + $n2) / 2;
					echo "A média entre $n1 e $n2 é ". number_format($m, 1);
					if($m < 5) {
						$s = "REPROVADO";
					} elseif($m < 7) {
						$s = "RECUPERAÇÃO";	
					} else {
						$s = "APROVADO";
					}
					echo "<br />Situação: $s";
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-02-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
