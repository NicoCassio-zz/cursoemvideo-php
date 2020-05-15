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
						<p><label for="cEst">Estado: </label><select name="tEst" id="cEst">
							<option value="n">Acre</option>
							<option value="ne">Alagoas</option>
							<option value="n">Amapá</option>
							<option value="n">Amazonas</option>
							<option value="ne">Bahia</option>
							<option value="ne">Ceará</option>
							<option value="se">Espirito Santo</option>
							<option value="c">Goiás</option>
							<option value="ne">Maranhão</option>
							<option value="c">Mato Grosso</option>
							<option value="c">Mato Grosso do Sul</option>
							<option value="se">Minas Gerais</option>
							<option value="n">Pará</option>
							<option value="ne">Paraíba</option>
							<option value="s">Paraná</option>
							<option value="ne">Pernambuco</option>
							<option value="ne">Piauí</option>
							<option value="se">Rio de Janeiro</option>
							<option value="ne">Rio Grande do Norte</option>
							<option value="s">Rio Grande do Sul</option>
							<option value="n">Rondônia</option>
							<option value="n">Roraíma</option>
							<option value="s">Santa Catarina</option>
							<option value="se" selected>São Paulo</option>
							<option value="ne">Sergipe</option>
							<option value="n">Tocantins</option>
						</select></p>
						<input type="submit" value="Enviar" id="cBot" />
					</fieldset>
				</form>
			</section>
		</div>
	</body>
</html>
