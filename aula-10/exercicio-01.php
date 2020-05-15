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
					$op = isset($_GET['tOp'])?$_GET['tOp']:1;
					switch($op) {
						case 1:
							$r = $n * 2;
							break;
						case 2:
							$r = pow($n, 3);
							break;
						case 3:
							$r = sqrt($n);
							break;
						default:
							$r = "[INVÁLIDO]";
					}
					echo "O resultado é $r";
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-01-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
