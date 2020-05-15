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
				<form method="GET" action="exercicio-03.php">
					<fieldset>
						<legend>Envio de Dados</legend>
						<p><label for="cIni">Início: </label><input type="number" name="tIni" id="cIni" min="0" max="100" size="5" /></p>
						<p><label for="cFim">Fim: </label><input type="number" name="tFim" id="cFim" min="0" max="100" size="5" /></p>
						<p><labal for="cInc">Incremento: </label><select name="tInc" id="cInc">
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						<select></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
