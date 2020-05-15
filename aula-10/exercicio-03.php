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
					$d = isset($_GET['tEst'])?$_GET['tEst']:'se';
					switch($d) {
						case 'n':
							$r = "norte";
							break;
						case 's':
							$r = "sul";
							break;
						case 'se':
							$r = "sudeste";
							break;
						case 'ne':
							$r = "nordeste";
							break;
						case 'c':
							$r = "centro-oeste";
							break;
						default:
							$r = "[REGIÃO INVÁLIDA]";
					}
					echo "Reigão: $r";
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
