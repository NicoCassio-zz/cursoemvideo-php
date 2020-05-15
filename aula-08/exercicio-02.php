<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Aprendendo PHP</title>
		<link rel="stylesheet" href="../_css/estilo.css" />
	</head>
	<body>
		<div id="interface">
			<header id="cabecalho">
				<h1>Aprendendo novidades em PHP</h1>
			</header>
			<section id="corpo">
				<?php
					$nome = isset($_GET['tNome'])?$_GET['tNome']:"Não Informado";
					$ano = isset($_GET['tNasc'])?$_GET['tNasc']:2020;
					$idade = date("Y") - $ano;
					$sexo = $_GET['tSexo'];
					echo "Nome: $nome";
					echo "<br />Idade: $idade";
					echo "<br />Sexo: ". ($sexo == 'm'?"masculino":"feminino");
					echo "<br /><br />". ($sexo == 'm'?'O':'A'). " $nome tem $idade anos" 
				?>
			</section>
			<footer id="rodape">
				<a href="exercicio-02-form.php">Voltar</a>
			</footer>
		</div>
	</body>
</html>
