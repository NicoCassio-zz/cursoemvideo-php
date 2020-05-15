<!DOCTYPE html>
<html>
	<head>
		<?php
			$txt = isset($_GET['tTxt'])?$_GET['tTxt']:"Texto Genérico";
			$tam = isset($_GET['tTam'])?$_GET['tTam']:"12pt";
			$cor = isset($_GET['tCor'])?$_GET['tCor']:"black";
		?>
		<meta charset="utf-8" />
		<title>Aprendendo PHP</title>
		<link rel="stylesheet" href="../_css/estilo.css" />
		<style>
			span.texto {
				font-size: <?php echo $tam; ?>;
				color: <?php echo $cor; ?>;
			}
		</style>
	</head>
	<body>
		<div id="interface">
			<header id="cabecalho">
				<h1>Aprendendo novidades em PHP</h1>
			</header>
			<section id="corpo">
				<?php
					echo "<span class='texto'>$txt</span>";
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-03-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
