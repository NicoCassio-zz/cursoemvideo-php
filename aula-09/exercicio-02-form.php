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
						<p><label for="cN1">Nota 1: </label><input type="number" name="tN1" id="cN1" min="0" max="10" /></p>
						<p><label for="cN2">Nota 2: </label><input type="number" name="tN2" id="cN2" min="0" max="10" /></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
