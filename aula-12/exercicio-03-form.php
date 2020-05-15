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
						<p><label for="cNum">Número: </label><select name="tNum" id="cNum">
							<option value='1' selected>1</option>
							<option value='2'>2</option>
							<option value='3'>3</option>
							<option value='4'>4</option>
							<option value='5'>5</option>
							<option value='6'>6</option>
							<option value='7'>7</option>
							<option value='8'>8</option>
							<option value='9'>9</option>
							<option value='10'>10</option>
						</select></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
