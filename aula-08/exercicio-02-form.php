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
						<p><label for="cNome">Nome: </label><input type="text" name="tNome" id="cNome" size="7" /></p>
						<p><label for="cNasc">Ano de Nascimento: </label><input type="number" name="tNasc" id="cNasc" size="5" min="1900" max="2020" /></p>
						<fieldset id="sexo">
							<legend>Sexo</legend>
							<p><input type="radio" name="tSexo" id="cMasc" value="m" checked /><label for="cMasc"> Masculino</label></p>
							<p><input type="radio" name="tSexo" id="cFem" value="f" /><label for="cFem"> Feminino</label></p>
						</fieldset>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
