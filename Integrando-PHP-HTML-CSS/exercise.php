<!DOCTYPE html>
<html lang="PT-BR">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/modules.css">
	<link rel="stylesheet" href="assets/css/reset.css">
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="assets/css/exercise.css">
	<title>Curso PHP</title>
</head>

<body class="exercise">
	<header>
		<h1>Curso de Desenvolvimento Web com PHP 7</h1>
	</header>
	<nav>
		<a href=<?= "{$_GET['dir']}/{$_GET['file']}.php" ?> class="green">Sem formatação</a>
		<a href="index.php" class="red">Voltar</a>
	</nav>
	<main>
		<div class="content">
			<?php
			include("{$_GET['dir']}/{$_GET['file']}.php");
			?>
		</div>
	</main>
	<footer>Bianca Giovanna Borba Gomes &copy <?= date("Y") ?> </footer>
</body>

</html>