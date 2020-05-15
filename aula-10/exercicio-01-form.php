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
				<form method="GET" action="exercicio-01.php">
					<fieldset>
						<legend>Envio de Dados</legend>
						<p><label for="cNum">Número: </label><input type="number" name="tNum" id="cNum" min="0" max="100" size="5" /></p>
						<p><label for="cOp">Operação: </label><select name="tOp" id="cOp">
							<option value="1" selected>Dobro</option>
							<option value="2">Cubo</option>
							<option value="3">Raiz</option>
						</select></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
