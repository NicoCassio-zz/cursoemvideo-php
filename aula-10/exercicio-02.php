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
					$d = isset($_GET['tDia'])?$_GET['tDia']:2;
					switch($d) {
						case 1:
						case 7:
							echo "Não precisa sair de casa";
							break;
						case 2:
						case 3:
						case 4:
						case 5:
						case 6:
							echo "Vai pra escola!!";
							break;
						default:
							echo "[DIA INVÁLIDO]";
					}
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-02-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
