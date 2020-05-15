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
						<p><label for="cTxt">Texto: </label><input type="text" name="tTxt" id="cTxt" /></p>
						<p><label for="cTam">Tamanho </label><select name="tTam" id="cTam">
							<option value="8pt">8</option>
							<option value="10pt">10</option>
							<option value="14pt" selected>14</option>
							<option value="20pt">20</option>
							<option value="40pt">40</option>
						</select></p>
						<p><label for="cCor">Cor: </label><input type="color" name="tCor" id="cCor" /></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
