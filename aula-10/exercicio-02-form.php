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
						<p><label for="cDia">Dia da Semana: </label><select name="tDia" id="cDia">
							<option value='1'>Domingo</option>
							<option value='2' selected>Segunda-feira</option>
							<option value='3'>Terça-feira</option>
							<option value='4'>Quarta-feira</option>
							<option value='5'>Quinta-feira</option>
							<option value='6'>Sexta-feira</option>
							<option value='7'>Sábado</option>
						</select></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
