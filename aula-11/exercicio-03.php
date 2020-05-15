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
					$i = isset($_GET['tIni'])?$_GET['tIni']:0;
					$f = isset($_GET['tFim'])?$_GET['tFim']:0;
					$p = isset($_GET['tInc'])?$_GET['tInc']:0;
					if($i < $f) {
						while($i <= $f) {
							echo "$i.. ";
							$i += $p;
						}
					} elseif($i > $f) {
						while($i >= $f) {
							echo "$i.. ";
							$i -= $p;
						}
					} else {
						echo "[INVÁLIDO]"; 
					}
				?>
			</section>
			<footer id="rodape">
				<a href="javascript:history.go(-1)">Voltar</a>
			</footer>
		</div>
	</body>
</html>
