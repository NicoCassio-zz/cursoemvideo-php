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
						<legend>Envio de Dados</legend>
						<p><label for="cNum">Número: </label><select name="tNum" id="cNum">
							<?php
								for($i = 1; $i <= 10; $i++) {
									echo "<option value='$i'>$i</option>";
								}
							?>
						</select></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
