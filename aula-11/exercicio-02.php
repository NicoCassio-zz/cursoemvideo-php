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
					while($i <= 5) {
						$var = 'v'.$i;
						$$var = isset($_GET["tTxt$i"])?$_GET["tTxt$i"]:0;
						echo "Valor $i:  ${$var} <br />";
						$i++;
					}
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
