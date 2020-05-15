<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Aprendendo PHP</title>
		<link rel="stylesheet" href="../_css/estilo.css" />
		<link rel="stylesheet" href="../_css/formulario.css" />
	</head>
	<body>
		<div id="interface">
			<header id="cabecalho">
				<h1>Aprendendo novidades em PHP</h1>
			</header>
			<section id="corpo">
				<form method="GET" action="exercicio-02.php">
					<fieldset>
						<legend>Usando PHP</legend>
						<?php
							$i = 1;
							while($i <= 5) {
								echo "<p><label for='cTxt$i'>Valor $i: </label><input type=text name='tTxt$i' id='cTxt$i' size='10' /></p>";
								$i++;
							}
						?>
						<input type="submit" id="cBot" value="Enviar" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
